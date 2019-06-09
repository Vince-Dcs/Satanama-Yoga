<?php 


/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'post_meta_boxes_setup' );

/* Meta box setup function. */
function post_meta_boxes_setup() {

    /* Add meta boxes on the 'add_meta_boxes' hook. */
    add_action( 'add_meta_boxes', 'add_post_meta_boxes' );
  }


  /* Create one or more meta boxes to be displayed on the post editor screen. */
function add_post_meta_boxes() {

    add_meta_box(
      'reservation-post-class',      // Unique ID
      esc_html__( 'Cours', 'test Réservation' ),    // Title de la metaboxe
      'reservation_post_class_meta_box',  // Callback function
      null,                               // Admin page (or post type) si null viens l'afficher aussi dans les CPT (vient afficher dans TOUT le BO)
      'side',                             // Context
      'default'                           // Priority
    );
  }

  /* Display the post meta box. */
function reservation_post_class_meta_box( $post ) { ?>

    <?php wp_nonce_field( basename( __FILE__ ), 'reservation_post_class_nonce' ); ?>
  
    <p>
      <label for="reservation-post-class"><?php _e( "Titre du cours.", 'example' ); ?></label>
      <br />
      <input class="widefat" type="text" name="reservation-post-class" id="reservation-post-class" value="<?php echo esc_attr( get_post_meta( $post->ID, 'reservation_post_class', true ) ); ?>" size="30" />
      <label for="reservation-post-class"><?php _e( "Description du cours.", 'example' ); ?></label>
      <br />
      <input class="widefat" type="text" name="reservation-post-class" id="reservation-post-class" value="<?php echo esc_attr( get_post_meta( $post->ID, 'reservation_post_class', true ) ); ?>" size="30" />
      <label for="reservation-post-class"><?php _e( "Date du cours.", 'example' ); ?></label>
      <br />
      <input class="widefat" type="date" name="reservation-post-class" id="reservation-post-class" value="<?php echo esc_attr( get_post_meta( $post->ID, 'reservation_post_class', true ) ); ?>" size="30" />

    </p>
  <?php }