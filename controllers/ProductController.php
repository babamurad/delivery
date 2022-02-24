<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Category.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Product.php';

class ProductController
{

    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductsById($productId);

        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/product/view.php';
        return true;
    }
}
