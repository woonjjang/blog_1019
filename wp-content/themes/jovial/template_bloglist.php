<?php /* Template name: Blogs*/ ?>
<?php get_header(); ?>
	<section id="content" class="first clearfix" role="main">
		<div class="page-container full-width">
			<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="entry-page-image">
									<?php the_post_thumbnail(); ?>
								</div><!-- .entry-page-image -->
							<?php endif; ?>
							<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
<?php get_footer(); ?>