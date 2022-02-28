<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Category.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Product.php';

class SiteController
{


    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);
        
        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/site/index.php';
//        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/register.php';


        return true;
    }
   
}
