<?php 
get_header();

// Boucle permettant de générer les pages des pratiques : Respiration, Meditation et Postures
?>
<main class="content-practice">

<?php if ( have_posts() ): the_post(); ?>

    <section class="content-practice__training-first">
        <div class="content-practice__training-first__information">
            <h2 class="content-practice__training-first__information__title"><?php the_title(); ?></h2>
            <p class="content-practice__training-first__information__text"><?php the_content(); ?>
            </p>
        </div>
    </section>
<?php endif; ?>
</main>
<?php
get_footer();
?>
