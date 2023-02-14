<?php

declare(strict_types=1);

namespace App\Backoffice\CertificacionObra\Infrastructure\UserInterface\Web;

use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\RamseyUuidGenerator;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Response;

class CertificacionObraAddController extends WebController
{
	public function __invoke(FlashSession $flashSession, RamseyUuidGenerator $ramseyUuidGenerator): Response
	{
		return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
			'list_path'                  => TwigTemplateConstants::LIST_PATH,
			'page_title'                 => TwigTemplateConstants::SECTION_TITLE,
			'id'                         => $ramseyUuidGenerator->generate(),
			'nombres'                    => $flashSession->get('inputs.nombres'),
			'apellido'                   => $flashSession->get('inputs.apellido'),
			'numeroObra'               => $flashSession->get('inputs.numeroObra'),
			'etapa'                      => $flashSession->get('inputs.etapa'),
			'permiteModificarComputo'    => $flashSession->get('inputs.permiteModificarComputo'),
			'certificacionManual'        => $flashSession->get('inputs.certificacionManual'),
			'insGrabaCert'               => $flashSession->get('inputs.insGrabaCert'),
			'programa'                   => $flashSession->get('inputs.programa'),
			'departamento'               => $flashSession->get('inputs.departamento'),
			'localidad'                  => $flashSession->get('inputs.localidad'),
			'codigoPostal'               => $flashSession->get('inputs.codigoPostal'),
			'numeroLicitacion'           => $flashSession->get('inputs.numeroLicitacion'),
			'tipoLicitacion'             => $flashSession->get('inputs.tipoLicitacion'),
			'fechaLicitacion'            => $flashSession->get('inputs.fechaLicitacion'),
			'inicioObra'                 => $flashSession->get('inputs.inicioObra'),
			'plazo'                      => $flashSession->get('inputs.plazo'),
			'contratista'                => $flashSession->get('inputs.contratista'),
			'anticipoFinancieroNacion'    => $flashSession->get('inputs.anticipoFinancieroNacion'),
			'anticipoFinacieroProvincia' => $flashSession->get('inputs.anticipoFinacieroProvincia'),
			'aporteNacion'               => $flashSession->get('inputs.aporteNacion'),
			'aporteProvincia'            => $flashSession->get('inputs.aporteProvincia'),
			'ampliacionMontoNacion'      => $flashSession->get('inputs.ampliacionMontoNacion'),
			'ampliacionMontoProvincia'   => $flashSession->get('inputs.ampliacionMontoProvincia'),
			'porcentajeEntregaNacion'     => $flashSession->get('inputs.porcentajeEntregaNacion'),
			'porcentajeEntregaProvincia'  => $flashSession->get('inputs.porcentajeEntregaProvincia'),
			'coeficienteActivo'          => $flashSession->get('inputs.coeficienteActivo'),
			'porcentajeReparo'           => $flashSession->get('inputs.porcentajeReparo'),
			'bapin'                      => $flashSession->get('inputs.bapin'),
			'montoContratado'            => $flashSession->get('inputs.montoContratado'),
			'presupuestoOficial'         => $flashSession->get('inputs.presupuestoOficial'),
			'costoObra'                  => $flashSession->get('inputs.costoObra'),
			'form_action_attribute' => TwigTemplateConstants::CREATE_PATH,
			'submit_button_label'   => FormConstant::SUBMIT_BUTTON_VALUE_TO_CREATE,
			'action_to_do'          => FormConstant::CREATE_LABEL_TEXT,
		]);
	}
}
