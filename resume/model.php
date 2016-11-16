<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Wavix.tioo.ru</title>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/app_site/styles/style.css">
	<?php include(FOLDER.'app_site/style.php'); ?>
</head>
<body>
<div id="container">
<div id="header"><a href="/"><h1>Wavix.tioo.ru</h1></a></div>

<?php if(file_exists(FOLDER.'app_site/views/'.$view_.'.v.php')){
	include(FOLDER.'app_site/views/'.$view_.'.v.php');
}else{include(FOLDER.'app_site/views/404.v.php');} ?>

<div id="end"></div>
</div><!--container-->

<div id="footer">&copy WavixSan 2016</div>

<script src="/app_site/script.js"></script>
</body>
</html>