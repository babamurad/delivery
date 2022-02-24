<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/components/Db.php';

class Product
{

    const SHOW_BY_DEFAULT =3;

    /**
     * Return an array of products
     * @param int $count
     * @return array of products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();
        $result = $db->query('SELECT p.id, p.name, p.price, p.image, p.is_new, p.is_sale FROM product p WHERE p.status="1" ORDER BY p.id LIMIT ' . $count);
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['is_sale'] = $row['is_sale'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductsListByCategory($categoriesId = false, $page = 1) {
        if($categoriesId){

            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT p.id, p.name, p.price, p.image, p.is_new, p.is_sale FROM product p WHERE p.status=1 "
                 . " AND category_id= '$categoriesId'  ORDER BY p.id LIMIT " .self::SHOW_BY_DEFAULT . ' OFFSET ' . $offset );
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $products[$i]['is_sale'] = $row['is_sale'];
                $i++;
            }
        }

        return $products;
    }

    /**
     * Return product item by id
     * @param $productId integer
     * @return mixed
     */
    public static function getProductsById($productId) {

        $productId = intval($productId);

        if($productId){
            $db = Db::getConnection();
            $result = $db->query("SELECT p.id, p.name, p.price, p.image, p.is_new, p.is_sale, article, description FROM product p WHERE p.status=1 "
                . " AND id= '$productId'" );
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }


    }

    /**
     * Return total products in category
     * @param $categoryId integer
     */
    public static function getTotalProductInCategory($categoryId) {

        $db = Db::getConnection();
//        $result = $db->query('SELECT COUNT(id) AS count FROM products '
//                                        . ' WHERE status = "1" AND category_id = "'.$categoryId.'"');
        $result = $db->query('select * from product where product.status=1 and product.category_id='. $categoryId);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->rowCount();
        return $row;
    }
}