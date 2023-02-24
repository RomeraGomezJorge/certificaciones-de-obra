<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Application\Post\CertificacionCreator;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionPostController extends WebController
{
    private array                            $urlParameters;
    private CertificacionCreator             $creator;
    private ValidationRulesToCreateAndUpdate $validationRules;

    public function __construct(ValidationRulesToCreateAndUpdate $validationRules, CertificacionCreator $creator)
    {
        $this->validationRules       = $validationRules;
        $this->creator               = $creator;
    }

    public function __invoke(Request $request): Response
    {
        $this->urlParameters = ['obraId' => $request->get('obraId')];

        $isCsrfTokenValid = $this->isCsrfTokenValid($request->get('id'), $request->get('csrf_token'));

        if (!$isCsrfTokenValid) {
            return $this->redirectWithMessage('error_page', MessageConstant::INVALID_TOKEN_CSFR_MESSAGE);
        }

        $validationErrors = $this->validationRules->verify($request);

        return $validationErrors->count() !== 0
            ? $this->redirectWithErrors(TwigTemplateConstants::CREATE_PATH, $validationErrors, $request,$this->urlParameters)
            : $this->create($request);
    }

    private
    function create( Request $request): RedirectResponse
    {
        $this->creator->__invoke(
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
            $request->get('obraId')
        );

        return $this->redirectWithMessage(
            TwigTemplateConstants::LIST_PATH,
            MessageConstant::SUCCESS_MESSAGE_TO_CREATE,
            $this->urlParameters
        );

    }
}
