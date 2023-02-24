<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Domain\CertificacionConstant;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Infrastructure\UserInterface\Web\TwigTemplateConstants as ObraTemplateConstants;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\RamseyUuidGenerator;
use App\Shared\Infrastructure\Symfony\FlashSession;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionAddController extends CertificacionBaseController
{
    private FlashSession            $flashSession;
    private RamseyUuidGenerator     $ramseyUuidGenerator;
    private TwigTemplateConstants   $twigTemplateConstants;
    private ObraFinder              $obraFinder;
    private ObraTemplateConstants   $obraTemplateConstants;

    public function __construct(FlashSession $flashSession, RamseyUuidGenerator $ramseyUuidGenerator, TwigTemplateConstants $twigTemplateConstants, ObraFinder $obraFinder, ObraTemplateConstants $obraTemplateConstants)
    {
        $this->flashSession            = $flashSession;
        $this->ramseyUuidGenerator     = $ramseyUuidGenerator;
        $this->twigTemplateConstants   = $twigTemplateConstants;
        $this->obraFinder              = $obraFinder;
        $this->obraTemplateConstants   = $obraTemplateConstants;
    }

    public function __invoke(Request $request): Response
    {
        $obraId    = $request->get('obraId');
        $urlParams = ['obraId' => $obraId];
        $obra      = $this->obraFinder->__invoke($obraId);

        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'list_url'                    => $this->twigTemplateConstants->getListUrl($urlParams),
            'page_title'                  => $this->twigTemplateConstants::SECTION_TITLE,
            'id'                          => $this->ramseyUuidGenerator->generate(),
            'numeroCertificado'           => $this->flashSession->get('inputs.numeroCertificado') ?? $obra->numeroCertificadoSuggestion(),
            'obraId'                      => $obraId,
            'list_obra_url'               => $this->obraTemplateConstants->getListUrl(),
            'obra_nombre'                 => $obra->getNombreObra(),
            'fecha'                       => $this->flashSession->get('inputs.fecha'),
            'expedienteCertificado'       => $this->flashSession->get('inputs.expedienteCertificado'),
            'porcentajeAvanceObra'        => $this->flashSession->get('inputs.porcentajeAvanceObra'),
            'montoPagadoNacion'           => $this->flashSession->get('inputs.montoPagadoNacion'),
            'montoPagadoProvincia'        => $this->flashSession->get('inputs.montoPagadoProvincia'),
            'ubicacion'                   => $this->flashSession->get('inputs.ubicacion'),
            'numeroSidif'                 => $this->flashSession->get('inputs.numeroSidif'),
            'fechaInicioPago'             => $this->flashSession->get('inputs.fechaInicioPago'),
            'fechaFinPago'                => $this->flashSession->get('inputs.fechaFinPago'),
            'show_monto_pagado_provincia' => $this->showMontoPagadoProvincia($obra->getFuenteFinanciera()),
            'show_monto_pagado_nacion'    => $this->showMontoPagadoNacion($obra->getFuenteFinanciera()),
            'ubicaciones_choices'         => CertificacionConstant::UBICACIONES_DESCRIPTION,
            'form_action_attribute_url'   => $this->twigTemplateConstants->getCreateUrl(),
            'submit_button_label'         => FormConstant::SUBMIT_BUTTON_VALUE_TO_CREATE,
            'action_to_do'                => FormConstant::CREATE_LABEL_TEXT,
        ]);
    }


}
