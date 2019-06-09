<?php
get_header();

$myevents = $wpdb->get_results( "SELECT * FROM wp_event" );
?><div class="content-lesson__features">
<?php foreach ($myevents as $event ) {
    // print_r($event);
    ?> 
    <section class="content-lesson">
        <div class="content-lesson__card">
            <form action="" class="content-lesson__card__form" method="post">
                <h1 class="content-lesson__card__form__title"> Cours de <p class="content-lesson__card__form__text-title"><?= $event->title ?></p> </h1>
                <h2 class="content-lesson__card__form__subtitle">Description  <p class="content-lesson__card__form__text-description"><?= $event->description ?></p></h2>
                <h2 class="content-lesson__card__form__subtitle">Date <p class="content-lesson__card__form__text-date"> <?= date('d m Y', strtotime($event->date));?></p></h2>
            </form>
        </div>
    </section>

    <?php 

} ?>
</div>
<?php
get_footer();
?>
