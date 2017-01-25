<?php get_header();?>

<main>
    <div class="box-line">
        <!-- Start the Loop. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <section class="aboutme">
            <div class="aboutme__left">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            <div class="aboutme__right ">
                <div class="image__container">
                <?php the_post_thumbnail( 'full' ); ?>
                <ul class="sns">
                    <li class="sns__item"><a href="https://www.linkedin.com/in/AAIAACCaISEB9LWKBvNTCaJ9yT1Mxq2-MVLKq_w/" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
                    <li class="sns__item"><a href="https://github.com/Motoki0616" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
                    <li class="sns__item"><a href="https://twitter.com/motonai6" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                </ul>
                </div>
            </div>
        </section>
        <?php endwhile; endif;?>
    </div>
</main>

<?php get_footer();?>
