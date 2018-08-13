<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lgm-2019
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            $plink = esc_url( get_permalink() );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				lgm_2019_posted_on();
				//lgm_2019_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

    <?php if ( has_post_thumbnail() ) {
        lgm_2019_post_thumbnail();
    } else { ?>
        <a href="<?php echo($plink); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/images/default-thumb.png" alt="<?php the_title(); ?>" />
        </a>
    <?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->
