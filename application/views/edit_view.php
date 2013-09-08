<h1>Добавление поста</h1>
<form method="post" action= "/edit">
<label>Введите ваше имя</label><input type="name" name="name" value="<?php $data['name']?>">
<label>Введите дату</label><input type="date" name="date" value="<?php $data['date']?>">
<label>Введите текст поста</label><textarea name="text" value="<?php $data['text'] ?>></textarea>
<input type="submit">
</form>