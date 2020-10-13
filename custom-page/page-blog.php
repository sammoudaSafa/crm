<?php

/**
 * Template Name: Blog
 *
 */
get_header();
?>
<?php
$categories = get_categories();
foreach ($categories as $categorie) {
     echo '<div><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></div>';
}
?>

<?php // affiche les 6 articles les plus récents
$wp_query = new WP_Query(array('posts_per_page' => 6));

if ($wp_query->have_posts()) :
     while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <h5><?php the_category(); ?></h5>
          <p><?php the_excerpt('Suite'); ?></p>

<?php endwhile;
endif; ?>

<?php
get_footer();
?>