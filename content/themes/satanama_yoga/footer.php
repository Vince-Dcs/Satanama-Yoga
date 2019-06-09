</main>
<footer class="footer">
  <div class="footer__block">
      <div class="footer__block__social">
        <h3 class="footer__block__social__title">Satanama Yoga</h3>
        <p class="footer__block__social__text">Apprenez le yoga dans les meilleures conditions, Namaste.</p>
        <ul class="footer__block__social__list">  <!-- Partie avec les icones des réseaux sociaux -->
          <li class="footer__block__social__list__link"><a href="https://www.facebook.com/16knives/"><i class="fa fa-facebook-f"></i></a></li>
          <li class="footer__block__social__list__link"><a href="https://twitter.com/oclock_io?lang=fr"><i class="fa fa-twitter"></i></a></li>
          <li class="footer__block__social__list__link"><a href="https://www.instagram.com/16knives/"><i class="fa fa-instagram"></i></a></li>
          <li class="footer__block__social__list__link"><a href="https://www.youtube.com/channel/UCEVHEDqOB-N26EKDZt60f0w"><i class="fa fa-youtube"></i></a></li>                
        </ul>
        <?php dynamic_sidebar( 'widget' ); ?>
      </div>

      <!-- <div class="footer__block__widgets"> -->
      <?php wp_nav_menu( array(
              'container'       => false,
              'container_class' => 'footer__block__widgets',
              // 'items_wrap'      => '<li class="footer__block__widgets__list">%3$s </li>',
              'menu_class'      => 'footer__block__widgets',
              'theme_location'  => 'footer-menu',
            ) 
          ); ?>
      <!-- </div>  -->
  </div>

  <div class="footer__copyright">
    <p class="footer__copyright__text">2019 Sanatama Team - Build with respect of all the Mantras</p>
    <div class="footer__copyright__list">
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'contact' ) ) ) ; ?>" class="footer__copyright__list__link">Contact</a>
      <a href="<?php echo get_permalink( 3 ); ?>" class="footer__copyright__list__link">Conditions</a>
    </div>
  </div>
</footer>
  <?php wp_footer(); ?>

</body>
</html>