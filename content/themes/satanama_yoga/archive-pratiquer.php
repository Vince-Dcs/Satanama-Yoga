<?php 
get_header();?>

<!-- Page gérant dynamiquement les pratiques -->

<main class="content-cpt">
  <section class="content-cpt__main">
    <h1 class="content-cpt__main__title">Pratiquer le Yoga</h1>
    <p class="content-pratice__main__text"> Initiez vous aux diverses pratiques du yoga grâce à nos fiches conseils. 
      Un bon premier point d'entrée dans la pratique.
    </p>
  </section>
 <!-- Rajouter une boucle while? -->
 
  <!-- <section class="content-practice__main"> -->
    
    <div class="content__diy__content">
      <div class="content__diy__content__cards" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-pratiquer_postures.jpg');">
        <img src="" alt="" class="content__diy__cards__image">
        <a href="<?php echo get_permalink( 81 ) ; ?> " class="content__diy__cards__card__button">Postures</a>
      </div>
      <div class="content__diy__content__cards" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-pratiquer_meditation.jpg');">
        <img src="" alt="" class="content__diy__cards__image">
        <a href="<?php echo get_permalink( 82 ) ; ?>" class="content__diy__cards__card__button">Méditation</a>
      </div>
      <div class="content__diy__content__cards" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-pratiquer_respiration.jpg');">
        <img src="" alt="" class="content__diy__cards__image">
        <a href="<?php echo get_permalink( 83 ) ; ?>" class="content__diy__cards__card__button">Respiration</a>
      </div>
    </div>
<!-- </section> -->


</main>

<?php
get_footer(); ?>