<?php 
get_header();
echo 'Bienvenue sur les archives';

?>

<?php

if ( have_posts() ) : ?>
    <div class="main-school__content"> <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <div class="main-school__content__teacher">
            <img class="main-school__content__teacher__image" src="<?php the_post_thumbnail_url(); ?>" alt="" class="main-school__content__teacher__info">
            <h1 class="main-school__content__teacher__info__title"><?php the_title(); ?></h1>
            <?php echo '<p class="main-school__content__teacher__info__text">' . get_the_content() . '</p>' ;?> 
            <a href="<?php the_permalink(); ?>" class="main-school__content__teacher__info__button">Découvrir</a>
        </div> 
              
        <?php
    endwhile; ?>
    </div><?php
endif; 

get_footer();
?>



