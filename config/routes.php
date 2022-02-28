<?php
return array(
    'product/([0-9]+)' => 'product/view/$1',
    'locity' => 'locity/index',
    'catalog' => 'catalog/index',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1',
    'user/register' => 'user/register', //actionRegister in UserController
    '' => 'site/index'
);
