

<?php endif; ?>

<div class="col-lg-4">
	<div class="login-form">
		<form action="#" method="post" enctype="multypart/form-date">

			<p>Название товара</p>
			<input type="text" name="name" placeholder="" value="">
			

			<p>Артикул</p>
			<input type="text" name="code" placeholder="" value="">
			

			<p>Стоимость, руб</p>
			<input type="text" name="price" placeholder="" value="">
			

			<p>Категория</p>
			<select name="category_id">
				<?php if (is_array($categoriesList)): ?>
					<?php foreach ($categoriesList as $category): ?>
						<option value="<?php echo $category['id']; ?>">
							<?php echo $category['name']; ?>
						</option>
					<?php endforeach; ?>
				<?php endif; ?>
			</select>

			<br><br>

			<p>Производитель</p>
			<input type="text" name="brand" placeholder="" value="">
			

			<p>Изображение товара</p>
			<input type="file" name="image" placeholder="" value="">

			<p>Детальное описание</p>
			<textarea name="description"></textarea>

			<br><br>

			<p>Наличие на складе</p>
			<select name="availability">
				<option value="1" selected="selected">Да</option>
				<option value="0">Нет</option>
			</select>

			<br><br>

			<p>Новинка</p>
			<select name="is_new">
				<option value="1" selected="selected">Да</option>
				<option value="0">Нет</option>
			</select>

			<br><br>

			<p>Рекомендуемые</p>
			<select name="is_recommended">
				<option value="1" selected="selected">Да</option>
				<option value="0">Нет</option>
			</select>

			<br><br>

			<p>Статус</p>
			<select name="status">
				<option value="1" selected="selected">Отображается</option>
				<option value="0">Скрыт</option>
			</select>

			<br><br>

			<input type="submit" name="submit" value="Сохранить" class="btn btn-default">

			<br><br>

		</form>
	</div>
</div>