<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/components/Db.php';

class City
{
    /**
     * Return array of City
     */
    public static function getCityList()
    {
        $db = Db::getConnection();
        $cityList = array();
        $result = $db->query('SELECT id, name FROM city ORDER BY sort_order ASC');
        $i = 0;
        while ($row = $result->fetch()) {
            $cityList[$i]['id'] = $row['id'];
            $cityList[$i]['name'] = $row['name'];
            $i++;
        }

        return $cityList;
    }
}