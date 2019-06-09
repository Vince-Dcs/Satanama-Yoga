<?php 
get_header();


if ( have_posts() ): the_post(); ?>

<main class="cgv">
    <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
</main>

<?php
endif;

get_footer();