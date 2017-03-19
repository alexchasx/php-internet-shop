<?php

		$result = $db->query($sql);

		// Указываем, что хотим получить данные в виде массива
		$result->setFetchMode(PDO::FETCH_ASSOC);

		// Получение и возврат результатов
		$i = 0;
		$products = array();
		while ($row = $result->fetch()) {
			$products[$i]['id'] = $row['id'];
			$products[$i]['code'] = $row['code'];
			$products[$i]['name'] = $row['name'];
			$products[$i]['price'] = $row['price'];
			$i++;
		}
		return $products;
	}

	/**
	 * Возвращает список рекомендуемых товаров
	 * @return array <p>Массив с товарами</p>
	 */
	public function getRecommendedProducts()
	{
		// Соединение с БД
		$db = Db::getConnection();

		// Получение и возврат результатов
		$result = $db->query('SELECT id, name, price, is_new FROM product '
			. 'WHERE status = "1" AND is_recommended = "1" '
			. 'ORDER BY id DESC');

		$i = 0;
		$productsList = array();
		while ($row = $result->fetch()) {
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['name'] = $row['name'];
			$productsList[$i]['price'] = $row['price'];
			$productsList[$i]['is_new'] = $row['is_new'];
			$i++;
		}
		return $productsList;
	}

	/**
	* Возвращает список товаров
	* @return array <p>Массив с товарами</p>
	*/
	/**
	 * Action
	 */
	public static function getProductsList()
	{
		
	}

	public static function ZZZZZZ()
	{
		// Соединение с БД
		$db = Db::getConnection();

		// Получение и возврат результатов
		$result = $db->query('SELECT id, name, price, code FROM product '
			. 'ORDER BY id ASC');
		$productsList = array();
		$i = 0;
		while ($row = $result->fetch()) {
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['name'] = $row['name'];
			$productsList[$i]['price'] = $row['price'];
			$productsList[$i]['code'] = $row['code'];
			$i++;
		}
		return $productsList;
	}

	/**
	 * Удаляет товар с указанным id
	 * @param integer $id <p>id товара</p>
	 * @return boolean <p>Результаты выполнения метода</p>
	 */
	public static function deleteProductById($id)
	{
		// Соединение с БД
		$db = Db::getConnection();

		$sql = 'DELETE FROM product WHERE id =  :id';

		// Получение и возврат результатов
		$result = $db->query($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	/**
	 * Редактирует товар с указанным id
	 * @param integer $id <p>id товара</p>
	 * @param array $options <p>Массив с информацией о товаре</p>
	 * @return boolean <p>Результаты выполнения метода</p>
	 */
	public static function updateProductById($id, $options)
	{
		// Соединение с БД
		$db = Db::getConnection();

		// $sql = 'DELETE FROM product WHERE id =  :id';

		// // Получение и возврат результатов
		// $result = $db->query($sql);
		// $result->bindParam(':id', $id, PDO::PARAM_INT);
		// return $result->execute();
	}



