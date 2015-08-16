<?php get_header( );?>
		<body>
		<div class="header">
		<h1><?php bloginfo('name')?></h1>
		<h2><?php bloginfo('description') ?></h2>
		</div>
<section class="page">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="container__item">
	<h1><?php the_title( ); ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<p>No hay contenido para mostrar en la página</p>
<?php endif; ?>
</article>
</section>
<?php get_footer(); ?>