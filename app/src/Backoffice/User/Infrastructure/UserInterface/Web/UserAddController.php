<?php

declare(strict_types=1);

namespace App\Backoffice\User\Infrastructure\UserInterface\Web;

use App\Backoffice\Role\Domain\RoleRepository;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\RamseyUuidGenerator;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\Response;

class UserAddController extends WebController
{
    private FlashSession          $flashSession;
    private RamseyUuidGenerator   $ramseyUuidGenerator;
    private RoleRepository        $roleRepository;
    private TwigTemplateConstants $twigTemplateConstants;

    public function __construct(FlashSession $flashSession, RamseyUuidGenerator $ramseyUuidGenerator, RoleRepository $roleRepository, TwigTemplateConstants $twigTemplateConstants)
    {
        $this->flashSession          = $flashSession;
        $this->ramseyUuidGenerator   = $ramseyUuidGenerator;
        $this->roleRepository        = $roleRepository;
        $this->twigTemplateConstants = $twigTemplateConstants;
    }

    public function __invoke(): Response
    {
        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'list_url'                  => $this->twigTemplateConstants->getListUrl(),
            'page_title'                => $this->twigTemplateConstants::SECTION_TITLE,
            'user_name_available_path'  => $this->twigTemplateConstants::USER_NAME_AVAILABLE_PATH,
            'email_available_path'      => $this->twigTemplateConstants::EMAIL_AVAILABLE_PATH,
            'id'                        => $this->ramseyUuidGenerator->generate(),
            'username'                  => $this->flashSession->get('inputs.username'),
            'name'                      => $this->flashSession->get('inputs.name'),
            'surname'                   => $this->flashSession->get('inputs.surname'),
            'email'                     => $this->flashSession->get('inputs.email'),
            'password'                  => '',
            'role_id'                   => $this->flashSession->get('inputs.role_id'),
            'is_active'                 => $this->flashSession->get('inputs.is_active'),
            'roles'                     => $this->roleRepository->searchAll(),
            'form_action_attribute_url' => $this->twigTemplateConstants->getCreateUrl(),
            'submit_button_label'       => FormConstant::SUBMIT_BUTTON_VALUE_TO_CREATE,
            'action_to_do'              => FormConstant::CREATE_LABEL_TEXT,
        ]);
    }
}
