<!doctype html>
<html>
	<head>
	</head>
	<body>
		<div id="menu">
			<ul>
				<li><a href="/">Посты</a></li>
				<li><a href="/add">Добавить пост</a></li>
			</ul>
			<br class="clearfix" />
		</div>
		<div id="content">
			<div class="box">
				<?php include 'application/views/'.$content_view; ?>

			</div>
			<br class="clearfix" />
		</div>
	</body>
</html>