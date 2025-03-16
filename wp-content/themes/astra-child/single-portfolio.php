<?php get_header(); ?>
<div class="container">
    <h1><?php the_title(); ?></h1>

    <p><strong>Client :</strong> <?php echo SCF::get('client'); ?></p>
    <p><strong>Date :</strong> <?php echo SCF::get('date_realisation'); ?></p>
    <p><strong>Lien :</strong> <a href="<?php echo SCF::get('lien_projet'); ?>" target="_blank">Voir le projet</a></p>

    <div class="gallery">
        <?php 
            $images = SCF::get('galerie');
            if ($images) {
                foreach ($images as $image) {
                    echo '<img src="' . esc_url($image) . '" alt="Image du projet">';
                }
            }
        ?>
    </div>
</div>
<?php get_footer(); ?>
