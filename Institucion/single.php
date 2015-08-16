<?php get_header(); ?>
<body>
		
	
				<?php rewind_posts(); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<div class="header">
		<h1><?php the_title(); ?></h1>
	
		</div>
				
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
				<?php get_footer(); ?>
