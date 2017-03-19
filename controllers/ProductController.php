<?php 

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

/**
* 
*/
class ProductController
{
	/**
	 * Action
	 */
	public function actionView($productId)
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$product = Product::getProductById($productId);

		requre_once(ROOT . '/views/product/index.php');

		return true;
	}