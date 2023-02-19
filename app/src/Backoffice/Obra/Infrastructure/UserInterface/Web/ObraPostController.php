<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Backoffice\Obra\Application\Post\ObraCreator;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObraPostController extends WebController
{

    public function __invoke(Request $request, ValidationRulesToCreateAndUpdate $validationRules, ObraCreator $creator): Response
    {
        $isCsrfTokenValid = $this->isCsrfTokenValid($request->get('id'), $request->get('csrf_token'));

        if (!$isCsrfTokenValid) {
            return $this->redirectWithMessage('error_page', MessageConstant::INVALID_TOKEN_CSFR_MESSAGE);
        }

        $validationErrors = $validationRules->verify($request);

        return $validationErrors->count() !== 0
            ? $this->redirectWithErrors(TwigTemplateConstants::CREATE_PATH, $validationErrors, $request)
            : $this->create($request,$creator);
    }

    private
    function create(Request $request,$creator): RedirectResponse
    {
        $creator->__invoke(
            $request->get('id'),
            $request->get('nombreObra'),
            $request->get('fuenteFinanciera'),
            $request->get('codigoPresupuestario'),
            $request->get('expedientePrincipal'),
            $request->get('montoObra'),
            $request->get('presupuestoNecesario'),
            $request->get('presupuestoDisponibleRegularizado'),
            $request->get('estadoPresupuestario'),
            $request->get('estadoObra'),
            $request->get('estadoTramite')
        );

        return $this->redirectWithMessage(
            TwigTemplateConstants::LIST_PATH,
            MessageConstant::SUCCESS_MESSAGE_TO_CREATE
        );

    }
}
