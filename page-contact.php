<?php
/*
  Template Name: Contact
*/
?>

<?php get_header();?>
<main>
    <div class="box-line">
    <section class="contact">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; endif;?>
        <ul class="sns">
            <li class="sns__item"><a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
            <li class="sns__item"><a href="#"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
            <li class="sns__item"><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
        </ul>
    </section>
    </div>
</main>
<?php get_footer();?>
