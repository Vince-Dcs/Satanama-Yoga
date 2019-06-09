<?php 
/**
 * Template Name: Postures Custom
 */

get_header();

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'postures',
    
);
// print_r($args);

$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) : ?>
    <div class="blog__posts"> <?php
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
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
endif; ?>

<?php
get_footer();
?>
