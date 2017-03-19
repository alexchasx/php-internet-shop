<?php

/**
* 
*/
class Cart
{
	/**
	 * Action
	 */
	public function actionIndex()
	{
		{

			//Находим общую стоимость: цена товара * количество товара
			$total += $item['price'] * $productsInCart[$item['id']];
		}

		return $total;
	}

	/**
	 * Очищаем корзину
	 */
	public static function clear()
	{
		if (isset($_SESSION['products'])) {
			unset($_SESSION['products']);
		}
	}
	
	/**
	 * Удаляем товар с указанным id из корзины
	 * @param integer $id <p>id товара</p>
	 */
	public static function deleteProduct($id)
	{
		// Получаем массив с идентификаторами и количеством товаров в корзине
		$productsInCart = self::getProducts();

		// Удаляем из массива элемент с указанным id
		unset($productsInCart[$id]);

		// Записываем массив товаров с удаленным элементов в сессию
		$_SESSION['products'] = $productsInCart;
	}
}