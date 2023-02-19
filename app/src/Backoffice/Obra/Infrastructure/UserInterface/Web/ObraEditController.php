<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Domain\ObraConstant;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObraEditController extends WebController
{

    public function __invoke(
        FlashSession $flashSession,
        Request $request,
        ObraFinder $finder
    ): Response
    {
        $obra = $finder->__invoke($request->get('id'));

        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'page_title'                        => TwigTemplateConstants::SECTION_TITLE,
            'list_path'                         => TwigTemplateConstants::LIST_PATH,
            'id'                                => $obra->getId(),
            'nombreObra'                        => $flashSession->get('inputs.nombreObra') ?? $obra->getNombreObra(),
            'fuenteFinanciera'                  => $flashSession->get('inputs.fuenteFinanciera') ?? $obra->getFuenteFinanciera(),
            'codigoPresupuestario'              => $flashSession->get('inputs.codigoPresupuestario') ?? $obra->getCodigoPresupuestario(),
            'expedientePrincipal'               => $flashSession->get('inputs.expedientePrincipal') ?? $obra->getExpedientePrincipal(),
            'montoObra'                         => $flashSession->get('inputs.montoObra') ?? $obra->getMontoObra(),
            'presupuestoNecesario'              => $flashSession->get('inputs.presupuestoNecesario') ?? $obra->getPresupuestoNecesario(),
            'presupuestoDisponibleRegularizado' => $flashSession->get('inputs.presupuestoDisponibleRegularizado') ?? $obra->getPresupuestoDisponibleRegularizado(),
            'estadoPresupuestario'              => $flashSession->get('inputs.estadoPresupuestario') ?? $obra->getEstadoPresupuestario(),
            'estadoObra'                        => $flashSession->get('inputs.estadoObra') ?? $obra->getEstadoObra(),
            'estadoTramite'                     => $flashSession->get('inputs.estadoTramite') ?? $obra->getEstadoTramite(),
            'fuente_financiera_choices'         => ObraConstant::FUENTES_FINANCIERAS_DESCRIPTION,
            'estado_presupuestario_choices'     => ObraConstant::ESTADOS_PRESUPUESTARIOS_DESCRIPTION,
            'estado_obra_choices'               => ObraConstant::ESTADOS_OBRA_DESCRIPTION,
            'name_available_path'               => TwigTemplateConstants::NAME_AVAILABLE_PATH,
            'form_action_attribute'             => TwigTemplateConstants::UPDATE_PATH,
            'submit_button_label'               => FormConstant::SUBMIT_BUTTON_VALUE_TO_UPDATE,
            'action_to_do'                      => FormConstant::UPDATE_LABEL_TEXT,
        ]);
    }

}
