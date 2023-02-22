<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Shared\Infrastructure\TwigTemplateConstantsBase;

final class TwigTemplateConstants extends TwigTemplateConstantsBase
{
    const LIST_PATH           = 'obra_list';
    const EDIT_PATH           = 'obra_edit';
    const ADD_PATH            = 'obra_add';
    const CREATE_PATH         = 'obra_create';
    const UPDATE_PATH         = 'obra_update';
    const DELETE_PATH         = 'obra_delete';
    const SECTION_TITLE       = 'Obra';
    const FORM_FILE_PATH      = 'backoffice/obra/formToHandleItem.html.twig';
    const LIST_FILE_PATH      = 'backoffice/obra/list.html.twig';
}