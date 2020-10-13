<?php

get_header();
?>


<?php while (have_posts()) : the_post(); ?>

     <h1><?php the_title(); ?></h1>
     <p><?php the_author(); ?></p>
     <p><?php the_date(); ?></p>
     <?php

     the_post_thumbnail();
     the_content();

     ?>


     <?php

     ?>

<?php endwhile; ?>



<?php

get_footer();
?>