<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Application\Put\CertificacionChangerDetails;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionPutController extends WebController
{
    private CertificacionChangerDetails      $updater;
    private ValidationRulesToCreateAndUpdate $validationRules;
    private                                  $urlParameters;

    public function __construct(CertificacionChangerDetails $updater, ValidationRulesToCreateAndUpdate $validationRules)
    {
        $this->updater         = $updater;
        $this->validationRules = $validationRules;
    }

    public function __invoke(Request $request): Response
    {
        $this->urlParameters = ['obraId' => $request->get('obraId')];
        $id                  = $request->get('id');
        $isCsrfTokenValid    = $this->isCsrfTokenValid($id, $request->get('csrf_token'));

        if(! $isCsrfTokenValid) {
            return $this->redirectWithMessage('error_page', MessageConstant::INVALID_TOKEN_CSFR_MESSAGE);
        }

        $validationErrors = $this->validationRules->verify($request);

        return $validationErrors->count() !== 0
            ? $this->redirectWithErrors(TwigTemplateConstants::LIST_PATH, $validationErrors, $request, $this->urlParameters)
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
            $request->get('montoPagadoNacion'),
            $request->get('montoPagadoProvincia'),
            $request->get('ubicacion'),
            $request->get('numeroSidif'),
            $request->get('fechaInicioPago'),
            $request->get('fechaFinPago'),
            $request->get('obraId'),

        );

        return $this->redirectWithMessage(
            TwigTemplateConstants::LIST_PATH,
            MessageConstant::SUCCESS_MESSAGE_TO_UPDATE,
            $this->urlParameters
        );
    }
}
