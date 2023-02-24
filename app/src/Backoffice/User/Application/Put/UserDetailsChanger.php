<?php

declare(strict_types=1);

namespace App\Backoffice\User\Application\Put;

use App\Backoffice\Role\Application\Get\EmpresaFinder;
use App\Backoffice\Role\Domain\EmpresaRepository;
use App\Backoffice\User\Application\Get\Single\UserFinder;
use App\Backoffice\User\Domain\UserEmailIsAvailableSpecification;
use App\Backoffice\User\Domain\UserNameIsAvailableSpecification;
use App\Backoffice\User\Domain\UserRepository;
use App\Backoffice\User\Domain\ValueObject\UserEmail;
use App\Backoffice\User\Domain\ValueObject\UserName;
use App\Backoffice\User\Domain\ValueObject\UserStatus;
use App\Backoffice\User\Domain\ValueObject\UserSurname;
use App\Backoffice\User\Domain\ValueObject\UserUsername;
use DateTime;

final class UserDetailsChanger
{
    private UserRepository                     $repository;
    private UserFinder                         $finder;
    private UserNameIsAvailableSpecification   $usernameIsAvailableSpecification;
    private UserEmailIsAvailableSpecification  $userEmailIsAvailableSpecification;

    public function __construct(
        UserRepository $repository,
        UserNameIsAvailableSpecification $usernameIsAvailableSpecification,
        UserEmailIsAvailableSpecification $userEmailIsAvailableSpecification
    )
    {
        $this->repository                        = $repository;
        $this->finder                            = new UserFinder($repository);
        $this->usernameIsAvailableSpecification  = $usernameIsAvailableSpecification;
        $this->userEmailIsAvailableSpecification = $userEmailIsAvailableSpecification;
    }

    public function __invoke(
        string $id,
        string $newUsername,
        string $newName,
        string $newSurname,
        string $aNewEmail,
        string $role,
        int $isActive
    ): void
    {
        $user = $this->finder->__invoke($id);

        $user->changeDetails(
            new UserUsername($newUsername),
            new UserName($newName),
            new UserSurname($newSurname),
            new UserEmail($aNewEmail),
            $role,
            new UserStatus($isActive),
            new DateTime(),
            $this->usernameIsAvailableSpecification,
            $this->userEmailIsAvailableSpecification
        );

        $this->repository->save($user);
    }
}