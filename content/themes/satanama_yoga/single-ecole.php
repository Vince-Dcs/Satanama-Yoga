<?php
get_header();
?>

<main class="main-school">
<!-- Page gérant dynamiquement les informations des professeurs -->
    
<div class="main-school__information">
  <!-- titre de la page -->
  <h1 class="main-school__information__title">Les professeurs</h1>
  <!-- description des professeurs -->
  <p class="main-school__information__text">N'hésitez pas à vous renseigner sur les prochains cours dispensés par nos professeurs.</p>
</div>

<div class="main-school__content">
    <?php if ( have_posts() ): the_post(); ?>
        <div class="main-school__content__teacher">
            <!-- Image des 2 professeurs de l'école -->
            <img class="main-school__content__teacher__image" src="<?php the_post_thumbnail_url(); ?>"/>
            <div class="main-school__content__teacher__info">
            <?php echo  '<h1 class="main-school__content__teacher__info__title">' . get_the_title() . '</h1>' ;?>
            <?php echo '<p class="main-school__content__teacher__info__text">' . get_the_content() . '</p>' ;?> 
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'contact' ) ) ) ; ?>" class="main-school__content__teacher__info__button">Contacter</a>
            </div>
        </div>
    <?php endif; ?>
</div>
</main>

<?php
get_footer();
?>