<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lgm-2019
 */

get_header();
?>

<section id='p_title'>
<div id='lgm'>
Libre<br>
Graphics<br>
Meeting
<div id='loc'><span class='blu'>2019</span> / <span class='ora'>Saarbrücken</span></div>
</div>
</section>

<section id="p_about">
<div class='section-content'>
    <h1>About</h1>
    <div class='section-para'>
        <p>
        The Libre Graphics Meeting (LGM) is an annual meeting on free and open source software for graphics.
Since 2006 the Libre Graphics Meeting aims to attract developers, artists and professionals who use and improve free and open source software graphics applications.
        </p>
        <p>
            LGM promotes discussions amongst software developers, users, and the large intersection of those two categories. LGM has always had a strong artistic focus, with designers and artists showcasing their work alongside the work of software developers.
        </p>

        <p>
        More on the history and structure of LGM is available at our <a href='https://libregraphicsmeeting.org/lgm/'>organizational website</a>.
        </p>
    </div>
</div>
</section>

<section class='p_posts'>
	<div id="primary" class="content-area">
		<main id="main" class="site-main section-content">

		<h1>Latest Posts</h1>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-frontpost', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<!--
    <section class='p_sponsors'>
    <div class='section-content'>
        <h1>Sponsors</h1>
    </div>
    </section>
-->

<?php
//get_sidebar();
get_footer();
