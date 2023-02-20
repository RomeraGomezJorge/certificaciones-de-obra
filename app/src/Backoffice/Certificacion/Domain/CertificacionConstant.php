<?php


namespace App\Backoffice\Certificacion\Domain;


class CertificacionConstant
{

    const UBICACION_SIN_DEFINIR = 'SNDE';
    const UBICACION_PAGADO      = 'PAGA';

    const UBICACIONES_DESCRIPTION = [
        self::UBICACION_SIN_DEFINIR => 'Sin definir',
        self::UBICACION_PAGADO      => 'Pagado',
    ];
}