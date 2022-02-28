<?php


class CityController
{
    public function actionIndex()
    {

        $cityList = array();
        $cityList = City::getCityList();

    }
}