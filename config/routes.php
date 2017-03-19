<?php

return array(
   
    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

    'catalog' => 'catalog/index', // actionIndex in CatalogController 

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory in CatalogController 

    'cart/checkout' => 'cart/checkout', // actionAdd in CartController 



    'news/([a-z]+)/([0-9]+)' => 'news/view/$1', // actionView in NewsContrller
    'news' => 'news/index', // actionIndex in NewsController
    
 );