<?php

/**
* 
*/
class Product
{
	const SHOW_BY_DEFAULT = 6;

	/**
	 * Return an array of products
	 */
	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT, $page = 1)
	{
		$count = intval($count);
		$page = intval($page);
		$offset = $page * $count;

		// Соединение с БД
		$db = Db::getConnection();
		$productsList = array();

		// Получение и возврат результатов
		$result = $db->query('SELECT id, name, price, image, is_new FROM product '
			. 'WHERE status = "1" '
			. 'ORDER BY id DESC '
			. 'LIMIT ' . $count
			. 'OFFSET ' . $offset);

		$i = 0;
		while ($row = $result->fetch()) {
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['name'] = $row['name'];
			$productsList[$i]['image'] = $row['image'];
			$productsList[$i]['price'] = $row['price'];
			$productsList[$i]['is_new'] = $row['is_new'];
			$i++;
		}
		return $productsList;
	}

	/**
	 * Return an array of products
	 */
	public static function getProductsListByCategory($categoryId = false)
	{	
		if ($categoryId) {

			$page = intval($page);
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;
		
			// Соединение с БД
			$db = Db::getConnection();
			$products = array();

			// Получение и возврат результатов
			$result = $db->query('SELECT id, name, price, image, is_new FROM product '
				. 'WHERE status = "1" AND category_id - "$categoryId" '
				. 'ORDER BY id DESC '
				. 'LIMIT ' .self::SHOW_BY_DEFAULT);

			$i = 0;
			while ($row = $result->fetch()) {
				$products[$i]['id'] = $row['id'];
				$products[$i]['name'] = $row['name'];
				$products[$i]['image'] = $row['image'];
				$products[$i]['price'] = $row['price'];
				$products[$i]['is_new'] = $row['is_new'];
				$i++;
			}
			return $products;
		}
	}

	/**
	 * Action
	 */
	public static function getProductById($id)
	{
		$id = intval($id);

		if ($id) {
		
			// Соединение с БД
			$db = Db::getConnection();

			// Получение и возврат результатов
			$result = $db->query('SELECT * FROM product WHERE id=' . $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			return $result->fetch();
		}
	}





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


}
