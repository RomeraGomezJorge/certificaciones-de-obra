<?php

declare(strict_types=1);

namespace App\Backoffice\User\Infrastructure\UserInterface\Web;

use App\Backoffice\User\Application\Post\UserCreator;
use App\Backoffice\User\Domain\UserConstants;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserPostController extends WebController
{
    /**
     * @var UserCreator
     */
    private UserCreator $creator;
    /**
     * @var ValidatorInterface
     */
    private ValidatorInterface $validator;

    public function __construct(UserCreator $creator, ValidatorInterface $validator)
    {
        $this->creator   = $creator;
        $this->validator = $validator;
    }

    public function __invoke(Request $request): Response
    {
        $isCsrfTokenValid = $this->isCsrfTokenValid($request->get('id'), $request->get('csrf_token'));

        if (!$isCsrfTokenValid) {
            return $this->redirectWithMessage('error_page', MessageConstant::INVALID_TOKEN_CSFR_MESSAGE);
        }

        $validationErrors = $this->validateRequest($request);

        return $validationErrors->count() !== 0
            ? $this->redirectWithErrors(TwigTemplateConstants::CREATE_PATH, $validationErrors, $request)
            : $this->createUser($request);
    }

    private function validateRequest(Request $request): ConstraintViolationListInterface
    {
        $constraint = new Assert\Collection(
            [
                'id'         => new Assert\Uuid(),
                'username'   => [new Assert\Length(['min' => 1, 'max' => 100])],
                'name'       => [new Assert\Length(['min' => 1, 'max' => 100])],
                'surname'    => [new Assert\Length(['min' => 1, 'max' => 100])],
                'email'      => [new Assert\Email()],
                'password'   => [
                    new Assert\Length(['min' => 8, 'max' => 20]),
                    new Assert\Regex("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/")
                ],
                'role'       => [new Assert\Choice(array_keys(UserConstants::ROLES_DESCRIPTION))],
                'is_active'  => [new Assert\Optional()],
                'csrf_token' => [new Assert\NotBlank()]
            ]

        /*
            ^: anchored to beginning of string
            \S*: any set of characters
            (?=\S{8,}): of at least length 8
            (?=\S*[a-z]): containing at least one lowercase letter
            (?=\S*[A-Z]): and at least one uppercase letter
            (?=\S*[\d]): and at least one number
            $: anchored to the end of the string
         */
        );

        $input = $request->request->all();

        return $this->validator->validate($input, $constraint);
    }

    private function createUser(Request $request): RedirectResponse
    {
        $isActive = $request->get('is_active') == 'on';

        $this->creator->__invoke(
            $request->get('id'),
            $request->get('username'),
            $request->get('name'),
            $request->get('surname'),
            $request->get('email'),
            $request->get('password'),
            $request->get('role'),
            (int)$isActive
        );

        return $this->redirectWithMessage(
            TwigTemplateConstants::LIST_PATH,
            MessageConstant::SUCCESS_MESSAGE_TO_CREATE
        );
    }
}
