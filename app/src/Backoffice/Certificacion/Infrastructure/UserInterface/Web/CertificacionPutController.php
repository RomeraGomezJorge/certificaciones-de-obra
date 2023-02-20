<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Backoffice\Certificacion\Application\Put\CertificacionChangerDetails;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionPutController extends WebController
{
    private CertificacionChangerDetails      $updater;
    private ValidationRulesToCreateAndUpdate $validationRules;

    public function __invoke(Request $request): Response
    {
        $isCsrfTokenValid = $this->isCsrfTokenValid($request->get('id'), $request->get('csrf_token'));

        if (!$isCsrfTokenValid) {
            return $this->redirectWithMessage('error_page', MessageConstant::INVALID_TOKEN_CSFR_MESSAGE);
        }

        $validationErrors = $this->validationRules->verify($request);

        return $validationErrors->count() !== 0
            ? $this->redirectWithErrors(TwigTemplateConstants::EDIT_PATH, $validationErrors, $request)
            : $this->update($request);
    }

    private function update(Request $request): RedirectResponse
    {
        $this->updater->__invoke(
            $request->get('id'),
            $request->get('numeroCertificado'),
            $request->get('fecha'),
            $request->get('expedienteCertificado'),
            $request->get('porcentajeAvanceObra'),
            $request->get('montoPagado'),
            $request->get('ubicacion'),
            $request->get('numeroSidif'),
            $request->get('fechaInicioPago'),
            $request->get('fechaFinPago')
        );

        return $this->redirectWithMessage(
            TwigTemplateConstants::LIST_PATH,
            MessageConstant::SUCCESS_MESSAGE_TO_UPDATE
        );
    }
}
