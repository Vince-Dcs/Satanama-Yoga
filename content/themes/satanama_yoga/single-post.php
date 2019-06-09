<?php 
get_header();
?>
<?php 
// Permet de gérer les articles du Blog présent dans le BO
if ( have_posts() ): the_post(); ?>
    <section class="article">
        <div class="article__header-article">
            <img class="article__header-article__image" src="<?php the_post_thumbnail_url(); ?>" alt=""/>
        </div>
        
        <div class="article__article-content">
            <h1 class="article__article-content__title"><?php the_title(); ?></h1> <span> Ecrit par <strong><?php echo get_the_author();?></strong></span> <span><strong>publié le <?php echo get_the_date();?></strong> </span> 
            <p class="article__article-content__text"><?php the_content(); ?>
            </p>
        </div>
        <!-- Mise en place Pagination de posts en posts -->
        <section class="paging-article">
            <div class="paging-article__button"><?php previous_post_link( '%link', 'Article Précédent' ); ?></div>
            <div class="paging-article__button"><?php next_post_link( '%link', 'Article Suivant' ); ?></div>
        </section>   
    </section>
<?php endif; ?>
<?php 
get_footer();
?>