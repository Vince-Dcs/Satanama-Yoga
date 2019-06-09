<?php 
/**
 * Template Name: Category Custom Page
 */

get_header();
// $id_posts = $wpdb->get_results( "SELECT `slug` FROM `wp_terms`");
// print_r($id_posts);


// /* FIRST
//  * Note: This function only returns results from the default “category” taxonomy. For custom taxonomies use get_the_terms().
//  */
// $categories = get_the_terms( $post->ID, 'taxonomy' );
// // now you can view your category in array:
// var_dump( $categories );
// // or you can take all with foreach:
// // foreach( $categories as $category ) {
// //     echo $category->term_id . ', ' . $category->slug . ', ' . $category->name . '<br />';
// // }

// foreach( $id_posts as $slug ) {
//     echo $slug->slug . '<br/>';
//     }

global $post;
print_r($post);

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'meditation',
    'posts_per_page' => 4,
);
print_r($args);

$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) : ?>
    <div class="blog__posts"> <?php
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="blog__posts__post">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="blog__posts__post__image">
            <h1 class="blog__posts__post__title"><?php the_title(); ?></h1>
            <p class="blog__posts__post__text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="blog__posts__post__button">Lire la suite</a>
        </div> 
              
        <?php
    endwhile; ?>
    </div><?php
endif; ?>

<?php
get_footer();
?>
