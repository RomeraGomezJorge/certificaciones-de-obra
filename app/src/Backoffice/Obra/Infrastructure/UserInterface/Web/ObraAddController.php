<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Backoffice\Empresa\Domain\EmpresaRepository;
use App\Backoffice\Obra\Domain\ObraConstant;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\RamseyUuidGenerator;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObraAddController extends WebController
{

    private FlashSession          $flashSession;
    private RamseyUuidGenerator   $ramseyUuidGenerator;
    private TwigTemplateConstants $twigTemplateConstants;
    private EmpresaRepository     $empresaRepository;

    public function __construct(FlashSession $flashSession, RamseyUuidGenerator $ramseyUuidGenerator, TwigTemplateConstants $twigTemplateConstants, EmpresaRepository $empresaRepository)
    {
        $this->flashSession          = $flashSession;
        $this->ramseyUuidGenerator   = $ramseyUuidGenerator;
        $this->twigTemplateConstants = $twigTemplateConstants;
        $this->empresaRepository     = $empresaRepository;
    }

    public function __invoke(Request $request): Response
    {

        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'list_url'                          => $this->twigTemplateConstants->getListUrl(),
            'page_title'                        => $this->twigTemplateConstants::SECTION_TITLE,
            'id'                                => $this->ramseyUuidGenerator->generate(),
            'nombreObra'                        => $this->flashSession->get('inputs.nombreObra'),
            'fuenteFinanciera'                  => $this->flashSession->get('inputs.fuenteFinanciera'),
            'codigoPresupuestario'              => $this->flashSession->get('inputs.codigoPresupuestario'),
            'expedientePrincipal'               => $this->flashSession->get('inputs.expedientePrincipal'),
            'montoObra'                         => $this->flashSession->get('inputs.montoObra'),
            'presupuestoNecesario'              => $this->flashSession->get('inputs.presupuestoNecesario'),
            'presupuestoDisponibleRegularizado' => $this->flashSession->get('inputs.presupuestoDisponibleRegularizado'),
            'estadoPresupuestario'              => $this->flashSession->get('inputs.estadoPresupuestario'),
            'estadoObra'                        => $this->flashSession->get('inputs.estadoObra'),
            'estadoTramite'                     => $this->flashSession->get('inputs.estadoTramite'),
            'empresaId'                        => $this->flashSession->get('inputs.empresa_id'),
            'fuente_financiera_choices'         => ObraConstant::FUENTES_FINANCIERAS_DESCRIPTION,
            'estado_presupuestario_choices'     => ObraConstant::ESTADOS_PRESUPUESTARIOS_DESCRIPTION,
            'estado_obra_choices'               => ObraConstant::ESTADOS_OBRA_DESCRIPTION,
            'empresa_choices'                   => $this->empresaRepository->searchAll(),
            'form_action_attribute_url'         => $this->twigTemplateConstants->getCreateUrl(),
            'submit_button_label'               => FormConstant::SUBMIT_BUTTON_VALUE_TO_CREATE,
            'action_to_do'                      => FormConstant::CREATE_LABEL_TEXT,
        ]);
    }
}
