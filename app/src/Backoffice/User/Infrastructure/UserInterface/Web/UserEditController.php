<?php

declare(strict_types=1);

namespace App\Backoffice\User\Infrastructure\UserInterface\Web;

use App\Backoffice\User\Application\Get\Single\UserFinder;
use App\Backoffice\User\Domain\UserConstants;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserEditController extends WebController
{
    private FlashSession          $flashSession;
    private UserFinder            $finder;
    private TwigTemplateConstants $twigTemplateConstants;

    public function __construct(FlashSession $flashSession, UserFinder $finder, TwigTemplateConstants $twigTemplateConstants)
    {
        $this->flashSession          = $flashSession;
        $this->finder                = $finder;
        $this->twigTemplateConstants = $twigTemplateConstants;
    }

    public function __invoke(Request $request): Response
    {
        $user = $this->finder->__invoke($request->get('id'));

        return $this->render($this->twigTemplateConstants::FORM_FILE_PATH, [
            'page_title'                => $this->twigTemplateConstants::SECTION_TITLE,
            'list_url'                  => $this->twigTemplateConstants->getListUrl(),
            'user_name_available_path'  => $this->twigTemplateConstants::USER_NAME_AVAILABLE_PATH,
            'email_available_path'      => $this->twigTemplateConstants::EMAIL_AVAILABLE_PATH,
            'reset_password_modal_path' => $this->twigTemplateConstants::RESET_PASSWORD_MODAL_PATH,
            'id'                        => $user->getId(),
            'username'                  => $this->flashSession->get('inputs.username') ?? $user->getUsername(),
            'name'                      => $this->flashSession->get('inputs.name') ?? $user->getName(),
            'surname'                   => $this->flashSession->get('inputs.surname') ?? $user->getSurname(),
            'email'                     => $this->flashSession->get('inputs.email') ?? $user->getEmail(),
            'role'                      => $this->flashSession->get('inputs.role') ?? $user->getRole(),
            'is_active'                 => $this->flashSession->get('inputs.is_active') ?? $user->getIsActive(),
            'roles'                     => UserConstants::ROLES_DESCRIPTION,
            'form_action_attribute_url' => $this->twigTemplateConstants->getUpdateUrl(),
            'submit_button_label'       => FormConstant::SUBMIT_BUTTON_VALUE_TO_UPDATE,
            'action_to_do'              => FormConstant::UPDATE_LABEL_TEXT,
        ]);
    }
}
