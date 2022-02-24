<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Category.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Product.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/components/Pagination.php';

class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(12);

        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/catalog/index.php';

        return true;
    }

    public function actionCategory($categoryId, $page = 1) {

        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductInCategory($categoryId);

        //создаем объект Pagination
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/catalog/category.php';

        return true;
    }
}