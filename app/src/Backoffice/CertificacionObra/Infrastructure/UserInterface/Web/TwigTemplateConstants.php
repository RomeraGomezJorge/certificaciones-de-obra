<?php
	
	declare(strict_types=1);
	
	namespace App\Backoffice\CertificacionObra\Infrastructure\UserInterface\Web;
	
	final class TwigTemplateConstants
	{
		const LIST_PATH = 'certificacion_obra_list';
		const EDIT_PATH = 'certificacion_obra_edit';
		const ADD_PATH = 'certificacion_obra_add';
		const CREATE_PATH = 'certificacion_obra_create';
		const UPDATE_PATH = 'certificacion_obra_update';
		const DELETE_PATH = 'certificacion_obra_delete';
		const NAME_AVAILABLE_PATH = 'certificacion_obra_name_available';
		const SECTION_TITLE = 'Certificación de Obra';
		const FORM_FILE_PATH = 'backoffice/certificacionObra/formToHandleItem.html.twig';
		const LIST_FILE_PATH = 'backoffice/certificacionObra/list.html.twig';
	}