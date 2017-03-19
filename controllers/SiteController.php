<?php

/**
* 
*/
class SiteController
{
	/**
	 * Action для главной страницы
	 */
	public function actionIndex()
	{
		// Список категорий для левого меню
		$categories = Category::getCategoriesList;

		// Список последних товаров
		$latestProducts = Product::getLatestProduct(6);

		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();

		// Подключаем вид
		require_once(ROOT . '/views/site/index.php');
		return true;
	}

	/**
	 * Action для страницы "Контакты"
	 */
	public function actionContact()
	{
		// Переменные для формы
		$userEmail = false;
		$userText = false;
		$result = false;

		// Обработка формы
		if (isset($_POST['submit'])) {
			// Если форма отправлена
			// Получаем данные из формы
			$userEmail = $_POST['userEmail'];
			$userText = $_POST['userText'];

			// Флаг ошибок
		}
		return ;
	}
	
	function __construct()
	{
		# code...
	}


}