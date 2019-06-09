<?php

get_header();

if ( have_posts() ) : 
    the_post();
?>

<!-- <main class="contact">
    <h1 class="contact__title"></h1>
    
</main> -->
<main class="contact">
    
    <form class="form">
    <h1 class="contact__title">Contactez-nous</h1>
    <!-- echo do_shortcode( '[contact-form-7 id="102" title="Contact form 1"]' );
     -->

    <?php
        $contact_form_query = new WP_Query([
        'pagename'       => 'contact'
        ]);


    if ( $contact_form_query->have_posts() ) :
        $contact_form_query->the_post();

        the_content();

        wp_reset_postdata();
    endif;
    ?>


    <div class="map__content">
        <h1 class="title-iframe">Retrouvez notre école</h1>
        <p class="text-iframe"> Satanama Yoga <br>
        3 Chemin de la Justice Seine et marne 77054 <br>
        +33 654789510</p>
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2619.2151112372712!2d2.892283483431967!3d48.96842946084637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDU4JzA2LjciTiAywrA1Myc0Mi43IkU!5e0!3m2!1sfr!2sfr!4v1558350220843!5m2!1sfr!2sfr" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</main>

<?php
endif;

get_footer();


