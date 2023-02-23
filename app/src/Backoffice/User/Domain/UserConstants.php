<?php


namespace App\Backoffice\User\Domain;


class UserConstants
{
    const ROLE_ADMIN              = 'ROLE_ADMIN';
    const ROLE_CERTIFICACION_OBRA = 'ROLE_CERTIFICACION_OBRA';

    const ROLES_DESCRIPTION = [
        self::ROLE_ADMIN              => 'Super admin',
        self::ROLE_CERTIFICACION_OBRA => 'Certificación obra'
    ];
}