<?php

declare(strict_types=1);

namespace App\Backoffice\CertificacionObra\Infrastructure\UserInterface\Web;

use App\Backoffice\CertificacionObra\Application\Post\CertificacionObraCreator;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionObraPostController extends WebController
{

    public function __invoke(Request $request, ValidationRulesToCreateAndUpdate $validationRules, CertificacionObraCreator $creator): Response
    {
        $isCsrfTokenValid = $this->isCsrfTokenValid($request->get('id'), $request->get('csrf_token'));

        if (!$isCsrfTokenValid) {
            return $this->redirectWithMessage('error_page', MessageConstant::INVALID_TOKEN_CSFR_MESSAGE);
        }

        $validationErrors = $validationRules->verify($request);
//
//        var_dump($validationErrors);
//        die();

        return $validationErrors->count() !== 0
            ? $this->redirectWithErrors(TwigTemplateConstants::CREATE_PATH, $validationErrors, $request)
            : $this->create($request,$creator);
    }

    private
    function create(Request $request,$creator): RedirectResponse
    {
        $creator->__invoke(
            $request->get('id'),
            $request->get('nombres'),
            $request->get('apellido'),
            $request->get('numeroObra'),
            $request->get('etapa'),
             $request->get('permiteModificarComputo'),
            $request->get('certificacionManual'),
            $request->get('insGrabaCert'),
            $request->get('programa'),
            $request->get('departamento'),
            $request->get('localidad'),
            $request->get('codigoPostal'),
            $request->get('numeroLicitacion'),
            $request->get('tipoLicitacion'),
            $request->get('fechaLicitacion'),
            $request->get('fechaInicioObra'),
            $request->get('plazo'),
            $request->get('contratista'),
            $request->get('anticipoFinancieroNacion'),
            $request->get('anticipoFinancieroProvincia'),
            $request->get('aporteNacion'),
            $request->get('aporteProvincia'),
            $request->get('ampliacionMontoNacion'),
            $request->get('ampliacionMontoProvincia'),
            $request->get('porcentajeEntregaNacion'),
            $request->get('porcentajeEntregaProvincia'),
            $request->get('coeficienteActivo'),
            $request->get('porcentajeReparo'),
            $request->get('bapin'),
            $request->get('montoContratado'),
            $request->get('presupuestoOficial'),
            $request->get('costoObra')
        );

        return $this->redirectWithMessage(
            TwigTemplateConstants::LIST_PATH,
            MessageConstant::SUCCESS_MESSAGE_TO_CREATE
        );

    }
}
