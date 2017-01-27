<?php get_header();?>
	<main>
		<section class="main-about">
            <!-- Start the Loop. -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 class="main-about__title"><?php the_title(); ?></h2>
                <div class="main-about__description">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif;?>
		</section>
        <div class="img-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bg-front.png" alt="motoki natio">
        </div>
		<div class="border-box">
	    <div class="border-box__top"></div>
	    <div class="border-box__right"></div>
	    <div class="border-box__bottom"></div>
	    <div class="border-box__left"></div>
	    </div>
	</main>
<?php get_footer();?>
