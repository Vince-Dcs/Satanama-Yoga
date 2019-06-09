<?php 
get_header();


if ( have_posts() ) : ?>
    <div class="blog__posts"> <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <div class="blog__posts__post">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="blog__posts__post__image">
            <h1 class="blog__posts__post__title"><?php the_title(); ?></h1>
            <?php echo '<p class="blog__posts__post__text">' . get_the_excerpt() . '</p>' ;?> 
            <a href="<?php the_permalink(); ?>" class="blog__posts__post__button">Lire la suite</a>
        </div> 
              
        <?php
    endwhile; ?>
    </div><?php
endif; 

get_footer();
?>



