<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Soap\Request\ChangeAstronomicalUnit;
use App\Soap\Response\ChangeAstronomicalUnitResponse;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\Request\GetConversionAmount;
use App\Soap\Response\GetConversionAmountResponse;

class SoapController extends Controller {

    protected $soapWrapper;

    public function __construct(SoapWrapper $soapWrapper) {
        $this->soapWrapper = $soapWrapper;
    }

    public function show() {
        $this->soapWrapper->add('Currency', function ($service) {
            $service
                ->wsdl('http://currencyconverter.kowabunga.net/converter.asmx?WSDL')
                ->trace(true)
                ->classmap([
                    GetConversionAmount::class,
                    GetConversionAmountResponse::class,
                ]);
        });

        $this->soapWrapper->add('Astronomical', function ($service) {
            $service
                ->wsdl('http://www.webservicex.net/Astronomical.asmx?WSDL')
                ->trace(true)
                ->classmap([
                    ChangeAstronomicalUnit::class,
                    ChangeAstronomicalUnitResponse::class,
                ]);
        });

        $respostaValor = $this->soapWrapper->call('Currency.GetConversionAmount', [
            new GetConversionAmount('USD', 'EUR', '2014-06-05', '1000')
            //new GetConversionAmount(getCurrencyFrom(), getCurrencyTo(), getRateDate(), getAmount())
        ]);

        $respostaDistancia = $this->soapWrapper->call('Astronomical.ChangeAstronomicalUnit', [
            new ChangeAstronomicalUnit('4.3', 'lightyear', 'meters')
        ]);

        return response()->json([
            'Valor em reais:' => $respostaValor->getGetConversionAmountResult(),
            'Distancia em metros:' => $respostaDistancia->getChangeAstronomicalUnitResult()
        ]);
    }
}