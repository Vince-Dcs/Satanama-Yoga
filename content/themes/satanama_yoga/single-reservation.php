<?php
get_header();

echo 'Single reservation';


 if ( have_posts() ): the_post(); ?>
<div class="main-school__content__teacher">
    <!-- Image des 2 professeurs de l'école -->
    <img class="main-school__content__teacher__image" src="<?php the_post_thumbnail_url(); ?>"/>
    <div class="main-school__content__teacher__info">
    <?php echo  '<h1 class="main-school__content__teacher__info__title">' . get_the_title() . '</h1>' ;?>
    <?php echo '<p class="main-school__content__teacher__info__text">' . get_the_content() . '</p>' ;?> 
    <a href="mailto:satanama.yoga.school@gmail.com" class="main-school__content__teacher__info__button">Contacter</a>
    </div>
</div>
<?php endif;


get_footer();
?>