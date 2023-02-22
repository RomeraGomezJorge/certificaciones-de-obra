<?php

declare(strict_types=1);

namespace App\Backoffice\User\Infrastructure\UserInterface\Web;

use App\Backoffice\User\Application\Put\AccountUpdater;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AccountPutController extends WebController
{
    private AccountUpdater $updater;
    private ValidatorInterface $validator;

    public function __construct(AccountUpdater $updater, ValidatorInterface $validator )
    {
        $this->updater = $updater;
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
            ? $this->redirectWithErrors(TwigTemplateConstants::EDIT_PATH, $validationErrors, $request)
            : $this->update($request);
    }

    private function validateRequest(Request $request): ConstraintViolationListInterface
    {
        $constraint = new Assert\Collection(
            [
                'id'         => new Assert\Uuid(),
                'username'   => [new Assert\NotBlank(), new Assert\Length(['min' => 1, 'max' => 100])],
                'name'       => [new Assert\NotBlank(), new Assert\Length(['min' => 1, 'max' => 100])],
                'surname'    => [new Assert\NotBlank(), new Assert\Length(['min' => 1, 'max' => 100])],
                'email'      => [new Assert\NotBlank(), new Assert\Email()],
                'csrf_token' => [new Assert\NotBlank()]
            ]
        );

        $input = $request->request->all();

        return $this->validator->validate($input, $constraint);
    }

    private function update(Request $request): RedirectResponse
    {
        $this->updater->__invoke(
            $request->get('id'),
            $request->get('username'),
            $request->get('name'),
            $request->get('surname'),
            $request->get('email')
        );

        return $this->redirectWithMessage(
            'user_account_management',
            MessageConstant::SUCCESS_MESSAGE_TO_UPDATE
        );
    }
}
