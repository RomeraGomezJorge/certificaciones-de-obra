<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Application\Get\Single\CertificacionFinder;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionEditController extends WebController
{

    public function __invoke(
        FlashSession $flashSession,
        Request $request,
        CertificacionFinder $finder
    ): Response
    {
        $certificacion = $finder->__invoke($request->get('id'));

        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'page_title'            => TwigTemplateConstants::SECTION_TITLE,
            'list_path'             => TwigTemplateConstants::LIST_PATH,
            'id'                    => $certificacion->getId(),
            'numeroCertificado'     => $flashSession->get('inputs.numeroCertificado') ?? $certificacion->getNumeroCertificado(),
            'fecha'                 => $flashSession->get('inputs.fecha') ?? $certificacion->getFecha(),
            'expedienteCertificado' => $flashSession->get('inputs.expedienteCertificado') ?? $certificacion->getExpedienteCertificado(),
            'porcentajeAvanceObra'  => $flashSession->get('inputs.porcentajeAvanceObra') ?? $certificacion->getPorcentajeAvanceObra(),
            'montoPagado'           => $flashSession->get('inputs.montoPagado') ?? $certificacion->getMontoPagado(),
            'ubicacion'             => $flashSession->get('inputs.ubicacion') ?? $certificacion->getUbicacion(),
            'numeroSidif'           => $flashSession->get('inputs.numeroSidif') ?? $certificacion->getNumeroSidif(),
            'fechaInicioPago'       => $flashSession->get('inputs.fechaInicioPago') ?? $certificacion->getFechaInicioPago(),
            'fechaFinPago'          => $flashSession->get('inputs.fechaFinPago') ?? $certificacion->getFechaFinPago(),
            'name_available_path'   => TwigTemplateConstants::NAME_AVAILABLE_PATH,
            'form_action_attribute' => TwigTemplateConstants::UPDATE_PATH,
            'submit_button_label'   => FormConstant::SUBMIT_BUTTON_VALUE_TO_UPDATE,
            'action_to_do'          => FormConstant::UPDATE_LABEL_TEXT,
        ]);
    }

}
