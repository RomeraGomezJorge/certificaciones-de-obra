<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Backoffice\Obra\Domain\ObraConstant;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\RamseyUuidGenerator;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Response;

class ObraAddController extends WebController
{
    public function __invoke(FlashSession $flashSession, RamseyUuidGenerator $ramseyUuidGenerator): Response
    {
        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'list_path'                         => TwigTemplateConstants::LIST_PATH,
            'page_title'                        => TwigTemplateConstants::SECTION_TITLE,
            'id'                                => $ramseyUuidGenerator->generate(),
            'nombreObra'                        => $flashSession->get('inputs.nombreObra'),
            'fuenteFinanciera'                  => $flashSession->get('inputs.fuenteFinanciera'),
            'codigoPresupuestario'              => $flashSession->get('inputs.codigoPresupuestario'),
            'expedientePrincipal'               => $flashSession->get('inputs.expedientePrincipal'),
            'montoObra'                         => $flashSession->get('inputs.montoObra'),
            'presupuestoNecesario'              => $flashSession->get('inputs.presupuestoNecesario'),
            'presupuestoDisponibleRegularizado' => $flashSession->get('inputs.presupuestoDisponibleRegularizado'),
            'estadoPresupuestario'              => $flashSession->get('inputs.estadoPresupuestario'),
            'estadoObra'                        => $flashSession->get('inputs.estadoObra'),
            'estadoTramite'                     => $flashSession->get('inputs.estadoTramite'),
            'fuente_financiera_choices'         => ObraConstant::FUENTES_FINANCIERAS_DESCRIPTION,
            'estado_presupuestario_choices'     => ObraConstant::ESTADOS_PRESUPUESTARIOS_DESCRIPTION,
            'estado_obra_choices'               => ObraConstant::ESTADOS_OBRA_DESCRIPTION,
            'form_action_attribute'             => TwigTemplateConstants::CREATE_PATH,
            'submit_button_label'               => FormConstant::SUBMIT_BUTTON_VALUE_TO_CREATE,
            'action_to_do'                      => FormConstant::CREATE_LABEL_TEXT,
        ]);
    }
}
