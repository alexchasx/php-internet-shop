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
		;
		return ;
	}