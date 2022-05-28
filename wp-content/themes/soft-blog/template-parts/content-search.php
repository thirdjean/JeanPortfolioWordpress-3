<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Soft Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item">
		<?php if ( has_post_thumbnail() ) : ?>
            <div class="featured-image">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'full' ); ?></a>
            </div><!-- .featured-image -->
        <?php endif; ?>

		<div class="entry-container">
            <?php soft_blog_posted_on(); ?>
                            
			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</div><!-- .entry-container -->
	</div><!-- .post-item -->
</article><!-- #post-## -->