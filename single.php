<?php get_header(); ?>
<main>
    <div class="box-line">
        <!-- Loop starts here -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <section class="work-detail">
                <h2><?php the_title();?></h2>
                <div class="work-information">
                    <div class="work-information__left-container">
                        <?php the_content();?>
                        <p class="btn"><a href="<?php the_field('visite_website');?>" target="_blank">Visit Website</a></p>
                    </div>
                    <dl class="work-information__right-container">
                        <dt>Project</dt>
                        <dd><?php the_field('project');?></dd>
                        <dt>Date</dt>
                        <dd><?php the_field('date');?></dd>
                        <dt>What I used</dt>
                        <dd><?php the_field('what_i_used');?></dd>
                    </dl>
                </div>

                <div class="work-image">
                    <?php the_field('website_images');?>
                </div>

                <div class="navigation">
                    <p><?php previous_post_link('%link', '< Previous Work'); ?></p>
                    <p><?php next_post_link('%link', 'Next Work >'); ?></p>
                </div>
            </section>
        <?php endwhile; endif;?>

    </div>
</main>

<?php get_footer(); ?>
