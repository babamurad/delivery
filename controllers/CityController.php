<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/models/City.php';

class CityController
{
    public function actionIndex()
    {

        $cityList = array();
        $cityList = City::getCityList();
        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/city/services.php';

    }
}