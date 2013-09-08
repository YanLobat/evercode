<h1>Мой уютненький бложик</h1>
<?php    
	foreach ($data as $post)
	{
	echo $post['name'];
	echo "<br>";
	echo $post['date'];
	echo "<br>";
	echo $post['text'];
	echo "<br>";
	?>
	<a href="/post/".$post['id'].>ссылка</a>
	<?php
}
?>
<br/>

