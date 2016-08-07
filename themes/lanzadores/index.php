<?php get_header(); ?>
    <header class="Header">
    	<nav class="Menu">
    		<li>Inicio</li>
			<li>Nosotros</li>
			<li>Manifiesto</li>
			<li>Archivo</li>
		</nav>
		<picture class="Picture">
			<source srcset="<?php bloginfo(template_url); ?>/images/lanzadores-logo.png" media="(min-width: 600px)"/>
			<img class="Picture__large" src="<?php bloginfo(template_url); ?>/images/test.png" alt="Lanzadores logo" />
		</picture>
	</header>
	<main class="Main">
		<section class="Main__Post">
			<?php
				if(have_posts()) :
					while (have_posts()) :
						the_post();
					?>
					<article class="Post">
						<h2 class="Post__Title"><?php the_title(); ?></h2>
						<div class="Post__Description">
							<?php the_excerpt(); ?>
						</div>
						<?php
							if(has_post_thumbnail()) {
								?>
								<picture class="Post__Picture">
									<source srcset="<?php the_post_thumbnail_url('full') ?>" media="(min-width: 600px)"/>
									<img src="<?php the_post_thumbnail_url('thumbnail') ?>" />
								</picture>
								<?php
							}
						?>
						<footer class="Post__Footer">
							<div class="Post__Footer__description">
								<small><?php the_tags(); ?></small>
							</div>
							<div class="Post__Footer__description">
								<a href="<?php the_permalink(); ?>">Leer más</a>
							</div>
						</footer>
					</article>
					<?php
				endwhile;
				else :
				?>
					<h4>Ups!, no hay posts</h4>
				<?php
			endif;
			wp_reset_postdata();
			?>
		</section>
	</main>
<?php get_footer(); ?>
