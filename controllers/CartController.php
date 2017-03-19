<?php

/**
* 
*/
class CartController
{
	
	function sss()
	{
		// Добавляем товар в корзину
		Cart::addProduct($id);

		// Возвращаем пользователя на страницу, с которой он пришел
		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");
	}

	/**
	 * Action для добавления товара в корзину при помощи асинхронного запроса (ajax)
	 * @param integer $id <p>id товара</p>
	 */
	public function actionAddAjax($id)
	{
		// Добавляем товар в корзину и печатаем результат: количество товаров в корзине
		echo Cart::addProduct($id);
		return true;
	}

	/**
	 * Action для удаления товара из корзины синхронным запросом
	 * @param integer $id <p>id товара</p>
	 */
	public function actionDelete($id)
	{
		// Удаляемзаданный товар из корзины
		Cart::deleteProduct($id);

		// Возвращаем пользователя в корзину
		header("Location: /cart");
	}

	/**
	 * Action для страницы "Корзина"
	 */
	public function actionIndex()
	{
		// Список категорий для левого меню
		$categories = Category::getCategoriesList;

		// Получим идентификаторы и количество товаров в корзине
		$productsInCart = Cart::getProducts();

		if ($productsInCart) {
			// Если в корзине есть товары, получаем полную информацию о товарах для списка

		}
	}
}