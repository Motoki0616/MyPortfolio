<?php get_header();?>

<?php
    $args = array(
        'post_type' => 'portfolio'
      );
    $query = new WP_Query( $args );
?>

<main>
    <div id="fullpage">
        <?php if( $query->have_posts()) : while( $query->have_posts()) : $query->the_post();
            $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full');
            $thumbnail_url = $thumbnail_data[0];
        ?>
            <section class="work section" style="background: url('<?php echo $thumbnail_url ?>') center center no-repeat; background-size: cover;">
            <div class="box-line">
                <div class="bcg-shadow clearfix">
                <div class="container-right">
                    <p class="text-case">Case</p>
                    <h2 class="company-name"><?php the_title(); ?></h2>
                    <p class="company-description"><?php the_content('More Detail'); ?></p>
                </div>
                </div>
            </div>
            </section>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</main>

<?php get_footer();?>
