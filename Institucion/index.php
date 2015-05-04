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
			<section class="content">
				<?php rewind_posts(); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h3><?php the_title(); ?> </h3>
					<p><?php the_excerpt(); ?> </p>
					<ul>
						<li><?php the_category(); ?> </li>
						<li><?php the_author(); ?></li>
						<li><?php the_time(); ?></li>
						<li><?php the_date(); ?></li>
					</ul>
				</article>				
				<?php endwhile; ?>
				
				<?php else: ?>
				<!-- no posts found -->
				<h3>No hay contenido para mostrar</h3>
				<?php endif; ?>
				
			</section>
	</body>

</html>