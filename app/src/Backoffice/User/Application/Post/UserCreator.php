<?php

declare(strict_types=1);

namespace App\Backoffice\User\Application\Post;

use App\Backoffice\User\Domain\PasswordEncoder;
use App\Backoffice\User\Domain\User;
use App\Backoffice\User\Domain\UserEmailIsAvailableSpecification;
use App\Backoffice\User\Domain\UserNameIsAvailableSpecification;
use App\Backoffice\User\Domain\UserRepository;
use App\Backoffice\User\Domain\ValueObject\UserEmail;
use App\Backoffice\User\Domain\ValueObject\UserName;
use App\Backoffice\User\Domain\ValueObject\UserPassword;
use App\Backoffice\User\Domain\ValueObject\UserStatus;
use App\Backoffice\User\Domain\ValueObject\UserSurname;
use App\Backoffice\User\Domain\ValueObject\UserUsername;
use App\Shared\Domain\ValueObject\Uuid;
use DateTime;

final class UserCreator
{
    private UserRepository                     $repository;
    private UserNameIsAvailableSpecification   $usernameIsAvailableSpecification;
    private UserEmailIsAvailableSpecification  $userEmailIsAvailableSpecification;
    private PasswordEncoder                    $passwordEncoder;

    public function __construct(
        UserRepository $repository,
        UserNameIsAvailableSpecification $usernameIsAvailableSpecification,
        UserEmailIsAvailableSpecification $userEmailIsAvailableSpecification,
        PasswordEncoder $passwordEncoder
    )
    {
        $this->repository                        = $repository;
        $this->usernameIsAvailableSpecification  = $usernameIsAvailableSpecification;
        $this->userEmailIsAvailableSpecification = $userEmailIsAvailableSpecification;
        $this->passwordEncoder                   = $passwordEncoder;
    }

    public function __invoke(
        string $id,
        string $username,
        string $name,
        string $surname,
        string $email,
        string $plainPassword,
        string $role,
        int $isActive
    )
    {

        $plainPassword = new UserPassword($plainPassword);
        $createAt      = new DateTime();

        $user = User::create(
            new Uuid($id),
            new UserUsername($username),
            new UserName($name),
            new UserSurname($surname),
            new UserEmail($email),
            $plainPassword,
            $role,
            new UserStatus($isActive),
            $createAt,
            $this->usernameIsAvailableSpecification,
            $this->userEmailIsAvailableSpecification);

        $user->encodePassword(
            $this->passwordEncoder->encode($user, $plainPassword->value())
        );

        $this->repository->save($user);

    }
}