	<?php get_header(); ?>
  <?php include (TEMPLATEPATH . "/template/header.php");?>
             <?php include (TEMPLATEPATH . "/template/carousel.php");?>
            		<h1><?php bloginfo('name')?></h1>
	<div class="sidebar">
		<?php dynamic_sidebar('sidebar-header'); ?>
		</div>
		<section class="page">		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<a href="<?php the_permalink(); ?>"> <h3> <?php the_title(); ?> </h3></a>
					<figure>
						<?php the_post_thumbnail('Portada'); ?>
					</figure>
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