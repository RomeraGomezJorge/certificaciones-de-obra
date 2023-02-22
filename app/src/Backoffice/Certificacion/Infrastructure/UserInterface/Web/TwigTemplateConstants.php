<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Shared\Infrastructure\TwigTemplateConstantsBase;

final class TwigTemplateConstants extends TwigTemplateConstantsBase
{
    const LIST_PATH      = 'certificacion_list';
    const EDIT_PATH      = 'certificacion_edit';
    const ADD_PATH       = 'certificacion_add';
    const CREATE_PATH    = 'certificacion_create';
    const UPDATE_PATH    = 'certificacion_update';
    const DELETE_PATH    = 'certificacion_delete';
    const SECTION_TITLE  = 'Certificación';
    const FORM_FILE_PATH = 'backoffice/certificacion/formToHandleItem.html.twig';
    const LIST_FILE_PATH = 'backoffice/certificacion/list.html.twig';

}