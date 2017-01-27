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
                        <p class="btn"><a href="<?php the_field('visite_website');?>" target="_blank"><svg><rect x="0" y="0" fill="none" width="100%" height="100%"/></svg>Visit Website</a></p>
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
                    <p><?php next_post_link('%link','<svg viewBox="0 0 50 80" xml:space="preserve">
                        <polyline fill="none" stroke="#8D742A" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" points="45.63,75.8 0.375,38.087 45.63,0.375 "/>
                        </svg>'.'Previous Work'); ?></p>
                    <p><?php previous_post_link( '%link', 'Next Work' . '<svg viewBox="0 0 50 80" xml:space="preserve">
                        <polyline fill="none" stroke="#8D742A" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "/>
                        </svg>'); ?></p>
                </div>
            </section>
        <?php endwhile; endif;?>

    </div>
</main>

<?php get_footer(); ?>
