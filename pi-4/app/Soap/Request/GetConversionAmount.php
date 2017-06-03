<?php

namespace App\Soap\Request;

class GetConversionAmount {
    protected $CurrencyFrom;
    protected $CurrencyTo;
    protected $RateDate;
    protected $Amount;

    /**
     * GetConversionAmount constructor.
     * @param $CurrencyFrom
     * @param $CurrencyTo
     * @param $RateDate
     * @param $Amount
     */
    public function __construct($CurrencyFrom, $CurrencyTo, $RateDate, $Amount)
    {
        $this->CurrencyFrom = $CurrencyFrom;
        $this->CurrencyTo = $CurrencyTo;
        $this->RateDate = $RateDate;
        $this->Amount = $Amount;
    }

    /**
     * @return mixed
     */
    public function getCurrencyFrom()
    {
        return $this->CurrencyFrom;
    }

    /**
     * @return mixed
     */
    public function getCurrencyTo()
    {
        return $this->CurrencyTo;
    }

    /**
     * @return mixed
     */
    public function getRateDate()
    {
        return $this->RateDate;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->Amount;
    }

}