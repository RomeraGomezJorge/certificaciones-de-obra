<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Application\Get\Single\CertificacionFinder;
use App\Backoffice\Certificacion\Domain\CertificacionConstant;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Infrastructure\UserInterface\Web\TwigTemplateConstants as ObraTemplateConstants;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionEditController extends WebController
{

    private FlashSession          $flashSession;
    private CertificacionFinder   $finder;
    private TwigTemplateConstants $twigTemplateConstants;
    private ObraFinder            $obraFinder;
    /**
     * @var ObraTemplateConstants
     */
    private ObraTemplateConstants $obraTemplateConstants;

    public function __construct(FlashSession $flashSession, CertificacionFinder $finder, TwigTemplateConstants $twigTemplateConstants, ObraFinder $obraFinder, ObraTemplateConstants $obraTemplateConstants)
    {
        $this->flashSession          = $flashSession;
        $this->finder                = $finder;
        $this->twigTemplateConstants = $twigTemplateConstants;
        $this->obraFinder            = $obraFinder;
        $this->obraTemplateConstants = $obraTemplateConstants;
    }

    public function __invoke(Request $request): Response
    {
        $certificacion = $this->finder->__invoke($request->get('id'));
        $obraId        = $request->get('obraId');
        $obra          = $this->obraFinder->__invoke($obraId);
        $urlParams     = ['obraId' => $obraId];


        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'page_title'                => $this->twigTemplateConstants::SECTION_TITLE,
            'list_url'                  => $this->twigTemplateConstants->getListUrl($urlParams),
            'id'                        => $certificacion->getId(),
            'obraId'                    => $obraId,
            'list_obra_url'             => $this->obraTemplateConstants->getListUrl(),
            'obra_nombre'               => $obra->getNombreObra(),
            'numeroCertificado'         => $this->flashSession->get('inputs.numeroCertificado') ?? $certificacion->getNumeroCertificado(),
            'fecha'                     => $this->flashSession->get('inputs.fecha') ?? $certificacion->getFecha()->format('d/m/Y'),
            'expedienteCertificado'     => $this->flashSession->get('inputs.expedienteCertificado') ?? $certificacion->getExpedienteCertificado(),
            'porcentajeAvanceObra'      => $this->flashSession->get('inputs.porcentajeAvanceObra') ?? $certificacion->getPorcentajeAvanceObra(),
            'montoPagado'               => $this->flashSession->get('inputs.montoPagado') ?? $certificacion->getMontoPagado(),
            'ubicacion'                 => $this->flashSession->get('inputs.ubicacion') ?? $certificacion->getUbicacion(),
            'numeroSidif'               => $this->flashSession->get('inputs.numeroSidif') ?? $certificacion->getNumeroSidif(),
            'fechaInicioPago'           => $this->flashSession->get('inputs.fechaInicioPago') ?? $certificacion->getFechaInicioPago()->format('d/m/Y'),
            'fechaFinPago'              => $this->flashSession->get('inputs.fechaFinPago') ?? $certificacion->getFechaFinPago()->format('d/m/Y'),
            'ubicaciones_choices'       => CertificacionConstant::UBICACIONES_DESCRIPTION,
            'form_action_attribute_url' => $this->twigTemplateConstants->getUpdateUrl(),
            'submit_button_label'       => FormConstant::SUBMIT_BUTTON_VALUE_TO_UPDATE,
            'action_to_do'              => FormConstant::UPDATE_LABEL_TEXT,
        ]);
    }

}
