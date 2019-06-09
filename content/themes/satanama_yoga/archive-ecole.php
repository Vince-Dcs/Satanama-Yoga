<?php 
get_header();
?>
<!-- Page gérant dynamiquement l'ensemble des professeurs -->
<main class="main-school">
    <div class="main-school__information">
    <!-- titre de la page -->
        <h1 class="main-school__information__title">Notre école</h1>
        <p class="main-school__information__text">Bienvenue sur notre école Satanama Yoga. Nos professeurs diplômés sont à votre écoute.
        Namaste ! </p>
    </div>

    <main class="main-school__features">
    <?php 
    if ( have_posts() ): ?>
        <div class="main-school__content">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="main-school__content__teacher">

                <!-- Image des 2 professeurs de l'école -->
                <img class="main-school__content__teacher__image" src="<?php the_post_thumbnail_url(); ?>"/>
                <div class="main-school__content__teacher__info">
                    <h1 class="main-school__content__teacher__info__title"><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="main-school__content__teacher__info__button">Découvrir</a>
                </div>
            </div> 
        <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </main>
</main>
<?php
get_footer();
?>



