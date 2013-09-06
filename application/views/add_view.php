<h1>Добавление поста</h1>
<form method="post" action= "/add">
<label>Введите ваше имя</label><input type="name" name="name">
<label>Введите дату</label><input type="date" name="date">
<label>Введите текст поста</label><textarea name="text"></textarea>
<input type="submit">
</form>
<?php
var_dump($data);
?>