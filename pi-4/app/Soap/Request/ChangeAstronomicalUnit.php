<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 03/06/2017
 * Time: 15:39
 */

namespace App\Soap\Request;


class ChangeAstronomicalUnit {
    protected $AstronomicalValue;
    protected $fromAstronomicalUnit;
    protected $toAstronomicalUnit;

    /**
     * ChangeAstronomicalUnit constructor.
     * @param $AstronomicalValue
     * @param $fromAstronomicalUnit
     * @param $toAstronomicalUnit
     */
    public function __construct($AstronomicalValue, $fromAstronomicalUnit, $toAstronomicalUnit) {
        $this->AstronomicalValue = $AstronomicalValue;
        $this->fromAstronomicalUnit = $fromAstronomicalUnit;
        $this->toAstronomicalUnit = $toAstronomicalUnit;
    }

    /**
     * @return mixed
     */
    public function getAstronomicalValue() {
        return $this->AstronomicalValue;
    }

    /**
     * @return mixed
     */
    public function getFromAstronomicalUnit() {
        return $this->fromAstronomicalUnit;
    }

    /**
     * @return mixed
     */
    public function getToAstronomicalUnit() {
        return $this->toAstronomicalUnit;
    }

}