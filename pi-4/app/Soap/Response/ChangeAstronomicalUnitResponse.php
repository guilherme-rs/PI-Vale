<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 03/06/2017
 * Time: 15:43
 */

namespace App\Soap\Response;


class ChangeAstronomicalUnitResponse {
    protected $ChangeAstronomicalUnitResult;

    /**
     * ChangeAstronomicalUnitResponse constructor.
     * @param $ChangeAstronomicalUnitResult
     */
    public function __construct($ChangeAstronomicalUnitResult)
    {
        $this->ChangeAstronomicalUnitResult = $ChangeAstronomicalUnitResult;
    }

    /**
     * @return mixed
     */
    public function getChangeAstronomicalUnitResult()
    {
        return $this->ChangeAstronomicalUnitResult;
    }

}