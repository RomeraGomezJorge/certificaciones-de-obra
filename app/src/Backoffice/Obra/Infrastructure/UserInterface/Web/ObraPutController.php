<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Backoffice\Obra\Application\Put\ObraChangerDetails;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObraPutController extends WebController
{

    private ValidationRulesToCreateAndUpdate $validationRules;
    private ObraChangerDetails               $updater;

    public function __construct( ValidationRulesToCreateAndUpdate $validationRules, ObraChangerDetails $updater)
    {
        $this->validationRules       = $validationRules;
        $this->updater               = $updater;
    }

    public function __invoke(Request $request): Response
    {
        $id               = $request->get('id');
        $isCsrfTokenValid = $this->isCsrfTokenValid($id, $request->get('csrf_token'));

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
            MessageConstant::SUCCESS_MESSAGE_TO_UPDATE
        );
    }
}
