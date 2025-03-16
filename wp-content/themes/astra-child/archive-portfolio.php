<?php get_header(); ?>

<div class="container">
    <h1>Mon Portfolio</h1>
    <div class="portfolio-grid">
        <?php 
            $query = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1
            ));

            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="portfolio-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>
