<?php


namespace App\Backoffice\Obra\Domain;


class ObraConstant
{
    const FUENTE_FINANCIERA_NACION     = 'NACI';
    const FUENTE_FINACIERA_PROVINCIA   = 'PROV';
    const FUENTE_FINACIERA_SIN_DEFINIR = 'SIND';

    const FUENTES_FINANCIERAS_DESCRIPTION = [
        self::FUENTE_FINANCIERA_NACION   => 'Nación',
        self::FUENTE_FINACIERA_PROVINCIA => 'Provincia',
        self::FUENTE_FINACIERA_SIN_DEFINIR => 'Sin definir',
    ];

    const ESTADO_PRESUPUESTARIO_SIN_DEFINIR              = null;
    const ESTADO_PRESUPUESTARIO_MODIFICACION_45          = 'MO45';
    const ESTADO_PRESUPUESTARIO_MODIFICACION_47          = 'MO47';
    const ESTADO_PRESUPUESTARIO_CON_CREDITO              = 'COCR';
    const ESTADO_PRESUPUESTARIO_SIN_CREDITO              = 'SNCR';
    const ESTADO_PRESUPUESTARIO_CREDITO_FALTANTE         = 'CRFL';
    const ESTADO_PRESUPUESTARIO_CREDITO_PARCIAL          = 'CRPL';
    const ESTADO_PRESUPUESTARIO_CREDITO_AGENCIA_ESPACIOS = 'CRAE';
    const ESTADO_PRESUPUESTARIO_PUBLICOS                 = 'PUBL';

    const ESTADOS_PRESUPUESTARIOS_DESCRIPTION = [
        self::ESTADO_PRESUPUESTARIO_SIN_DEFINIR              => 'Sin definir',
        self::ESTADO_PRESUPUESTARIO_MODIFICACION_45          => 'Modificación 45',
        self::ESTADO_PRESUPUESTARIO_MODIFICACION_47          => 'Modificación 47',
        self::ESTADO_PRESUPUESTARIO_CON_CREDITO              => 'Con crédito',
        self::ESTADO_PRESUPUESTARIO_SIN_CREDITO              => 'Sin crédito',
        self::ESTADO_PRESUPUESTARIO_CREDITO_FALTANTE         => 'Crédito faltante',
        self::ESTADO_PRESUPUESTARIO_CREDITO_PARCIAL          => 'Crédito parcial',
        self::ESTADO_PRESUPUESTARIO_CREDITO_AGENCIA_ESPACIOS => 'Crédito agencia espacios',
        self::ESTADO_PRESUPUESTARIO_PUBLICOS                 => 'Públicos',
    ];

    const ESTADO_OBRA_EN_EJECUCION = 'EJEC';
    const ESTADO_OBRA_TERMINADA    = 'TERM';
    const ESTADO_OBRA_SIN_DEFINIR  = NULL;

    const ESTADOS_OBRA_DESCRIPTION = [
        self::ESTADO_OBRA_EN_EJECUCION => 'En ejecución',
        self::ESTADO_OBRA_TERMINADA    => 'Terminada',
        self::ESTADO_OBRA_SIN_DEFINIR  => 'Sin definir',
    ];

}