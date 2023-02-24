<?php


namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;


use App\Backoffice\Obra\Domain\ObraConstant;
use App\Shared\Infrastructure\Symfony\WebController;

class CertificacionBaseController extends WebController
{
    protected function showMontoPagadoProvincia(?string $fuenteFinanciera): bool
    {


        $validFuentesFinancieras = [
            ObraConstant::FUENTE_FINACIERA_NACION_Y_PROVINCIA,
            ObraConstant::FUENTE_FINACIERA_PROVINCIA,
        ];

        return in_array($fuenteFinanciera, $validFuentesFinancieras);
    }

    protected function showMontoPagadoNacion(?string $fuenteFinanciera): bool
    {
        $validFuentesFinancieras = [
            ObraConstant::FUENTE_FINACIERA_NACION_Y_PROVINCIA,
            ObraConstant::FUENTE_FINANCIERA_NACION,
        ];

        return in_array($fuenteFinanciera, $validFuentesFinancieras);
    }
}