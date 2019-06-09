<?php get_header(); ?>

<!-- Partie l'école, avec un lien vers la page du site internet -->
    <section class="content__school" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-ecole-white.jpg');">
      <div class="content__school__item">
        <h1 class="content__school__item__title">Satanama yoga</h1>
        <p class="content__school__item__text">Bienvenu sur le site de l'école <span  class="contente__school__item__text__uppercase">Satanama yoga</span> ! C'est ici que vous pouvez directement reserver vos cours en ligne.</p>
        <a href="<?php echo get_permalink( 105 ); ?>" class="content__school__item__button">En savoir plus</a>
      </div>
    </section>
  <!-- Partie réserver, avec un lien sur la section correspondante du site internet -->
    <section class="content__schedule" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-reserver.jpg');">
      <div class="content__schedule__item">
        <img class="content__schedule__item__svg" src="http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/clock.png" alt="">       
        <div class="content__schedule__item__informations"> 
          <h1 class="content__schedule__item__informations__title">Nos prochains cours</h1>
          <p class="content__schedule__item__informations__text">Vous pouvez désormais vous inscrire en ligne avec notre calendrier partagé. Ne raté plus aucun cours de votre école.</p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'cours' ) ) ) ; ?>" class="content__schedule__item__informations__button">Réserver</a>
        </div>
      </div>
    </section>
  <!-- Partie blog, avec un lien cliquable vers la partie actualité du site Satanama yoga -->
    <section class="content__blog" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-blog-white.jpg');">
      <div class="content__blog__informations">
        <h1 class="content__blog__informations__title">Notre actualité</h1>
        <p class="content__blog__informations__text">Suivez l'actualité de l'école Satanama sur leur  blog</p>
        <!-- esc_url permet de rediriger vers la page en url -->
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'blog' ) ) ) ; ?> " class="content__blog__informations__button"> En lire plus</a>
      </div>
    </section>
  <!-- Section  pour appprendre à pratiquer le yoga seul. Chaque photo amène sur une partie/catégorie de la section pratiquer sur site web -->
    <section class="content__diy" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-pratiquerjpg.jpg');">
      <div class="content__diy__informations">
        <h1 class="content__diy__informations__title">Pratiquer le yoga</h1>
        <p class="content__diy__informations__text">Initiez vous aux diverses pratiques du yoga grâce à nos fiches conseils. Un bon premier point d'entrée dans la pratique.</p>
      </div>
      <div class="content__diy__cards">
        <div class="content__diy__cards__card" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-pratiquer_postures.jpg');">
          <img src="" alt="" class="content__diy__cards__card__image">
          <a href="<?php echo get_permalink( 81 ) ; ?> " class="content__diy__cards__card__button">Postures</a>
        </div>
        <div class="content__diy__cards__card" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-pratiquer_meditation.jpg');">
          <img src="" alt="" class="content__diy__cards__card__image">
          <a href="<?php echo get_permalink( 82 ) ; ?>" class="content__diy__cards__card__button">Méditation</a>
        </div>
        <div class="content__diy__cards__card" style="background-image: url('http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/landingpage_section-pratiquer_respiration.jpg');">
          <img src="" alt="" class="content__diy__cards__card__image">
          <a href="<?php echo get_permalink( 83 ) ; ?>" class="content__diy__cards__card__button">Respiration</a>
        </div>
      </div>
    </section>
<?php get_footer(); ?>


