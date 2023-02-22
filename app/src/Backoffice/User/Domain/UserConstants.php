<?php


namespace App\Backoffice\User\Domain;


class UserConstants
{
    const ROLE_SUPER_ADMIN        = 'ROLE_SUPER_ADMIN';
    const ROLE_CERTIFICACION_OBRA = 'ROLE_CERTIFICACION_OBRA';

    const ROLE_DESCRIPTION = [
        self::ROLE_SUPER_ADMIN        => 'Super admin',
        self::ROLE_CERTIFICACION_OBRA => 'Certificación obra'
    ];
}