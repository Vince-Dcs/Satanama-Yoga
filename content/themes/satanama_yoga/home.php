<?php 
 get_header();  
 ?>
<!-- Page blog qui contient l'ensemble des post du site -->

<!-- Mise en place de la boucle WP pour afficher les posts -->
<div class="blog">
   <div class="blog__information">
      <h1 class="blog__information__title">Le blog</h1>
      <p class="blog__information__text">Bienvenue sur la page d'actualité de l'école Satanama Yoga. Namaste !</p>
   </div>
   
   <div class="blog__categories"> 
      <?php
         wp_list_categories(
            array(
               'hide_empty'         => 1,
               // 'current_category'   => 'blog__categories__item',
               'orderby'            => 'name',
               'order'              => 'ASC',
               'separator'          => '',
               'style'              => '',
               'echo'               => true,
            ) 
         );  ?>
  </div>
   <?php 
    if ( have_posts() ): ?>
      <div class="blog__posts"> <?php
        while ( have_posts() ): the_post(); ?>
            <div class="blog__posts__post">
               <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="blog__posts__post__image">
               <h1 class="blog__posts__post__title"><?php the_title(); ?></h1>
               <?php echo '<p class="blog__posts__post__text">' . get_the_excerpt() . '</p>' ;?> 
               <a href="<?php the_permalink(); ?>" class="blog__posts__post__button">Lire la suite</a>
            </div> 
              
         <?php 
        endwhile; ?>
      </div>
      <!-- Template tag de la pagination entre les articles -->
      <section class="paging-blog">
         <div class="paging-blog__button"><?php previous_posts_link( 'Page précédente' ); ?></div>  
         <div class="paging-article__button"><?php next_posts_link( 'Page suivante' ); ?></div>  
      </section>
     
    <?php endif; ?>
</div>
    
<?php
get_footer(); 
?>