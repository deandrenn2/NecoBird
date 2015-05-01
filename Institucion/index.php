<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name')?></title>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url) ?>">
	<body>
		<div class="header">
		<h1><?php bloginfo('name')?></h1>
		<h2><?php bloginfo('description') ?></h2>
		</div>
			<ul>
				<li><?php bloginfo('wpurl') ?></li>
				<li><?php bloginfo('adminemail') ?></li>
				<li><?php bloginfo('charset') ?></li>
				<li><?php bloginfo('version') ?></li>
				<li><?php bloginfo('html_type') ?></li>
				<li><?php bloginfo('stylesheet_url') ?></li>
				<li><?php bloginfo('stylesheet_directory') ?></li>
			</ul>
	</body>

</html>