<?php get_header(); ?>
		<body class="blog">			
	               <?php include (TEMPLATEPATH . "/template/header.php");?>
             <?php include (TEMPLATEPATH . "/template/carousel.php");?>
            		
		
	
			<section class="container marketing">
                <h1><?php bloginfo('name')?></h1>
				<?php rewind_posts(); ?>
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
				
		
            <hr class="featurette-divider">
            <footer>
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </footer>
                	</section>
			
<?php get_footer('personalizado'); ?>