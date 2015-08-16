<?php
// template name: Pagina con sidebar
?>
<?php get_header( );?>
	<body class="table">
<section class="page sidebar">
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>