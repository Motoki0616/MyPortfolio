<?php get_header();?>

<main>
    <div class="box-line">
    <section class="aboutme">
        <!-- Start the Loop. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="aboutme__right">
                <h2><?php the_title(); ?></h2>
                <p class="photo-myself"><?php the_post_thumbnail('large'); ?></p>
            </div>
            <div class="aboutme__left">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif;?>
    </section>
    </div>
</main>

<?php get_footer();?>
