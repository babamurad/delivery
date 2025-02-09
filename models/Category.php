<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/components/Db.php';

class Category
{
    /**
     * Return an array of categories
     */
    public static function getCategoriesList(){
        $db = Db::getConnection();
        $categoryList = array();
        $result = $db->query('SELECT id, name FROM category ORDER BY sort_order ASC');
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }
}