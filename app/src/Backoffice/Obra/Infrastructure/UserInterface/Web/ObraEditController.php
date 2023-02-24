<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Backoffice\Empresa\Domain\EmpresaRepository;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Domain\ObraConstant;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObraEditController extends WebController
{

    private FlashSession          $flashSession;
    private ObraFinder            $finder;
    private TwigTemplateConstants $twigTemplateConstants;
    private EmpresaRepository     $empresaRepository;

    public function __construct(FlashSession $flashSession, ObraFinder $finder, TwigTemplateConstants $twigTemplateConstants, EmpresaRepository $empresaRepository)
    {
        $this->flashSession          = $flashSession;
        $this->finder                = $finder;
        $this->twigTemplateConstants = $twigTemplateConstants;
        $this->empresaRepository     = $empresaRepository;
    }

    public function __invoke(Request $request): Response
    {
        $id   = $request->get('id');
        $obra = $this->finder->__invoke($id);

        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'page_title'                        => $this->twigTemplateConstants::SECTION_TITLE,
            'list_url'                          => $this->twigTemplateConstants->getListUrl(),
            'id'                                => $obra->getId(),
            'nombreObra'                        => $this->flashSession->get('inputs.nombreObra') ?? $obra->getNombreObra(),
            'fuenteFinanciera'                  => $this->flashSession->get('inputs.fuenteFinanciera') ?? $obra->getFuenteFinanciera(),
            'codigoPresupuestario'              => $this->flashSession->get('inputs.codigoPresupuestario') ?? $obra->getCodigoPresupuestario(),
            'expedientePrincipal'               => $this->flashSession->get('inputs.expedientePrincipal') ?? $obra->getExpedientePrincipal(),
            'montoObra'                         => $this->flashSession->get('inputs.montoObra') ?? $obra->getMontoObra(),
            'presupuestoNecesario'              => $this->flashSession->get('inputs.presupuestoNecesario') ?? $obra->getPresupuestoNecesario(),
            'presupuestoDisponibleRegularizado' => $this->flashSession->get('inputs.presupuestoDisponibleRegularizado') ?? $obra->getPresupuestoDisponibleRegularizado(),
            'estadoPresupuestario'              => $this->flashSession->get('inputs.estadoPresupuestario') ?? $obra->getEstadoPresupuestario(),
            'estadoObra'                        => $this->flashSession->get('inputs.estadoObra') ?? $obra->getEstadoObra(),
            'estadoTramite'                     => $this->flashSession->get('inputs.estadoTramite') ?? $obra->getEstadoTramite(),
            'empresaId'                         => $this->flashSession->get('inputs.empresaId') ?? $obra->getEmpresa()->getId(),
            'empresa_choices'                   => $this->empresaRepository->searchAll(),
            'fuente_financiera_choices'         => ObraConstant::FUENTES_FINANCIERAS_DESCRIPTION,
            'estado_presupuestario_choices'     => ObraConstant::ESTADOS_PRESUPUESTARIOS_DESCRIPTION,
            'estado_obra_choices'               => ObraConstant::ESTADOS_OBRA_DESCRIPTION,
            'form_action_attribute_url'         => $this->twigTemplateConstants->getUpdateUrl(),
            'submit_button_label'               => FormConstant::SUBMIT_BUTTON_VALUE_TO_UPDATE,
            'action_to_do'                      => FormConstant::UPDATE_LABEL_TEXT,
        ]);
    }

}
