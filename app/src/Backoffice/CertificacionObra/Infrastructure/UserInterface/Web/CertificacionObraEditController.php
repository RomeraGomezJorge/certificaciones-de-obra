<?php

declare(strict_types=1);

namespace App\Backoffice\CertificacionObra\Infrastructure\UserInterface\Web;

use App\Backoffice\CertificacionObra\Application\Get\Single\CertificacionObraFinder;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificacionObraEditController extends WebController
{

	public function __invoke(
		FlashSession $flashSession,
		Request $request,
		CertificacionObraFinder $finder
	): Response
	{
		$certificacionObra = $finder->__invoke($request->get('id'));

		return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
			'page_title'                 => TwigTemplateConstants::SECTION_TITLE,
			'list_path'                  => TwigTemplateConstants::LIST_PATH,
			'id'                         => $certificacionObra->getId(),
			'nombres'                    => $flashSession->get('inputs.nombres') ?? $certificacionObra->getNombres(),
			'apellido'                   => $flashSession->get('inputs.apellido') ?? $certificacionObra->getApellido(),
			'numeroObra'               => $flashSession->get('inputs.numeroObra') ?? $certificacionObra->getnumeroObra(),
			'etapa'                      => $flashSession->get('inputs.etapa') ?? $certificacionObra->getEtapa(),
			'permiteModificarComputo'    => $flashSession->get('inputs.permiteModificarComputo') ?? $certificacionObra->getPermiteModificarComputo(),
			'certificacionManual'        => $flashSession->get('inputs.certificacionManual') ?? $certificacionObra->getCertificacionManual(),
			'insGrabaCert'               => $flashSession->get('inputs.insGrabaCert') ?? $certificacionObra->getInsGrabaCert(),
			'programa'                   => $flashSession->get('inputs.programa') ?? $certificacionObra->getPrograma(),
			'departamento'               => $flashSession->get('inputs.departamento') ?? $certificacionObra->getDepartamento(),
			'localidad'                  => $flashSession->get('inputs.localidad') ?? $certificacionObra->getLocalidad(),
			'codigoPostal'               => $flashSession->get('inputs.codigoPostal') ?? $certificacionObra->getCodigoPostal(),
			'numeroLicitacion'           => $flashSession->get('inputs.numeroLicitacion') ?? $certificacionObra->getNumeroLicitacion(),
			'tipoLicitacion'             => $flashSession->get('inputs.tipoLicitacion') ?? $certificacionObra->getTipoLicitacion(),
			'fechaLicitacion'            => $flashSession->get('inputs.fechaLicitacion') ?? $certificacionObra->getFechaLicitacion(),
			'inicioObra'                 => $flashSession->get('inputs.inicioObra') ?? $certificacionObra->getInicioObra(),
			'plazo'                      => $flashSession->get('inputs.plazo') ?? $certificacionObra->getPlazo(),
			'contratista'                => $flashSession->get('inputs.contratista') ?? $certificacionObra->getContratista(),
			'anticipoFinancieroNacion'    => $flashSession->get('inputs.anticipoFinancieroNacion') ?? $certificacionObra->getanticipoFinancieroNacion(),
			'anticipoFinacieroProvincia' => $flashSession->get('inputs.anticipoFinacieroProvincia') ?? $certificacionObra->getAnticipoFinacieroProvincia(),
			'aporteNacion'               => $flashSession->get('inputs.aporteNacion') ?? $certificacionObra->getAporteNacion(),
			'aporteProvincia'            => $flashSession->get('inputs.aporteProvincia') ?? $certificacionObra->getAporteProvincia(),
			'ampliacionMontoNacion'      => $flashSession->get('inputs.ampliacionMontoNacion') ?? $certificacionObra->getAmpliacionMontoNacion(),
			'ampliacionMontoProvincia'   => $flashSession->get('inputs.ampliacionMontoProvincia') ?? $certificacionObra->getAmpliacionMontoProvincia(),
			'porcentajeEntregaNacion'     => $flashSession->get('inputs.porcentajeEntregaNacion') ?? $certificacionObra->getporcentajeEntregaNacion(),
			'porcentajeEntregaProvincia'  => $flashSession->get('inputs.porcentajeEntregaProvincia') ?? $certificacionObra->getporcentajeEntregaProvincia(),
			'coeficienteActivo'          => $flashSession->get('inputs.coeficienteActivo') ?? $certificacionObra->getCoeficienteActivo(),
			'porcentajeReparo'           => $flashSession->get('inputs.porcentajeReparo') ?? $certificacionObra->getPorcentajeReparo(),
			'bapin'                      => $flashSession->get('inputs.bapin') ?? $certificacionObra->getBapin(),
			'montoContratado'            => $flashSession->get('inputs.montoContratado') ?? $certificacionObra->getMontoContratado(),
			'presupuestoOficial'         => $flashSession->get('inputs.presupuestoOficial') ?? $certificacionObra->getPresupuestoOficial(),
			'costoObra'                  => $flashSession->get('inputs.costoObra') ?? $certificacionObra->getCostoObra(),
			'name_available_path'        => TwigTemplateConstants::NAME_AVAILABLE_PATH,
			'form_action_attribute'      => TwigTemplateConstants::UPDATE_PATH,
			'submit_button_label'        => FormConstant::SUBMIT_BUTTON_VALUE_TO_UPDATE,
			'action_to_do'               => FormConstant::UPDATE_LABEL_TEXT,
		]);
	}

}
