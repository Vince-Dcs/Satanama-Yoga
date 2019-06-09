<?php

/**
 * Plugin Name: Satanama Yoga Newsletter
 * Description: Envoie une newsletter 
 * Version : 1.0
 * Author: Satanama Yoga Team 
 */

 // Empèche l'utilisateur d'avoir un accès direct au plugin
if ( ! defined( 'WPINC' ) ) {
        http_response_code( 404 );
        exit;
}
// enregistre le widget
function newsletter_register_widget(){
        register_widget( 'newsletter_widget' );
}

add_action( 'widgets_init', 'newsletter_register_widget' );
// Creation du widget
class newsletter_widget extends WP_Widget {
        // setup du widget (nom, description)
        public function __construct(){
                parent::__construct('newsletter', 'satanama Newsletter', array('description' => 'Un formulaire d\'inscription à la newsletter.'));
        }

        // Affichage en front-end
        function widget($args, $instance) {
                
                global $wpdb;

                $message = '';
                $email = $_POST['email'];
                // si l'email n'est pas vide
                if(!empty ($email)){
                        // si l'email est valide ET n'existe pas
                        if(filter_var($email, FILTER_VALIDATE_EMAIL) && empty($wpdb->get_results( "SELECT * FROM wp_newsletter WHERE email='$email'" ) ) ) {
                                // envoit du résultat dans la BDD
                                $wpdb->insert(
                                        'wp_newsletter',
                                        array(
                                                'email' => $email,
                                        ));
                                        // si les conditions sont remplies on informe l'utilisateur qu'il s'est inscrit
                                        $message = 'Votre inscription a bien été prise en compte !';
                        }
                        // sinon on indique à l'utilisateur qu'il y a une erreur
                        else {
                                $message = "Votre adresse email n'est pas valide ou est déjà enregistrée.";
                        }   
                }; 
                ?>
                <form method="post" class="newsletter">
                <p><?php echo $message; ?></p>
                <label for="satanama_newsletter_email">Inscription à la newsletter</label>
                <input id="satanama_newsletter_email" name="email" type="email" placeholder="email" />
                <input type="submit" id="newsletter-button"/> <br/>
                </form>
		<?php 
        }
        
        // affichage en BO
        public function form( $instance ) {
		
        }     
}