<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Domain\CertificacionConstant;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\RamseyUuidGenerator;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Response;

class CertificacionAddController extends WebController
{
    public function __invoke(FlashSession $flashSession, RamseyUuidGenerator $ramseyUuidGenerator): Response
    {
        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'list_path'             => TwigTemplateConstants::LIST_PATH,
            'page_title'            => TwigTemplateConstants::SECTION_TITLE,
            'id'                    => $ramseyUuidGenerator->generate(),
            'numeroCertificado'     => $flashSession->get('inputs.numeroCertificado'),
            'fecha'                 => $flashSession->get('inputs.fecha'),
            'expedienteCertificado' => $flashSession->get('inputs.expedienteCertificado'),
            'porcentajeAvanceObra'  => $flashSession->get('inputs.porcentajeAvanceObra'),
            'montoPagado'           => $flashSession->get('inputs.montoPagado'),
            'ubicacion'             => $flashSession->get('inputs.ubicacion'),
            'numeroSidif'           => $flashSession->get('inputs.numeroSidif'),
            'fechaInicioPago'       => $flashSession->get('inputs.fechaInicioPago'),
            'fechaFinPago'          => $flashSession->get('inputs.fechaFinPago'),
            'ubicaciones_choices'   => CertificacionConstant::UBICACIONES_DESCRIPTION,
            'form_action_attribute' => TwigTemplateConstants::CREATE_PATH,
            'submit_button_label'   => FormConstant::SUBMIT_BUTTON_VALUE_TO_CREATE,
            'action_to_do'          => FormConstant::CREATE_LABEL_TEXT,
        ]);
    }
}
