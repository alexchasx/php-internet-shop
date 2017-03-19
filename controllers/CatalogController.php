<?php 

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

/**
* 
*/
class CatalogController
{
	/**
	 * Action
	 */
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProduct = array();
		$latestProduct = Product::getLatestProducts(8);

		requre_once(ROOT . '/views/catalog/index.php');

		return true;
	}

	/**
	 * Action
	 */
	public function actionCategory($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$categoryProduct = array();
		$categoryProduct = Product::getProductsListByCategory($categoryId, $page);

		requre_once(ROOT . '/views/catalog/category.php');

		return true;
	}

}