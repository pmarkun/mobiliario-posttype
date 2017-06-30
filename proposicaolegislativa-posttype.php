<?php
/**

* Plugin Name: Proposição Legislativa post type

* Plugin URI: gabinete56.com.br/pluginprop

* Description: Um plugin de proposição legislativa para o Wordpress

* Version:  1.0

* Author: Gabinete56

* Author URI: http://gabinete56.com.br

* License:  GPL2

*/

add_action( 'init', 'proposicao_init' );
add_action( 'admin_init', 'proposicao_admin' );
add_action( 'save_post', 'proposicao_save_metabox_tipo', 10, 2 );

/**

* Register a proposicao post type.

*

*/


function proposicao_init() {

$labels = array(
    'name' => __( 'Proposições', 'post type general name', 'proposicao' ),
    'singular_name' => __( 'Proposição', 'post type singular name', 'proposicao' ),
    'menu_name' => __( 'Proposições', 'admin menu', 'proposicao' ),
    'name_admin_bar'=> __( 'Proposição', 'add new on admin bar', 'proposicao' ),
    'add_new'   => __( 'Add New', 'proposicao', 'proposicao' ),
    'add_new_item'=> __( 'Add New Proposição', 'proposicao' ),
    'new_item'    => __( 'New Proposição', 'proposicao' ),
    'edit_item'     => __( 'Edit Proposição', 'proposicao' ),
    'view_item'   => __( 'View Proposição', 'proposicao' ),
    'all_items'     => __( 'All Proposições', 'proposicao' ),
    'search_items'=> __( 'Search Proposições', 'proposicao' ),
    'parent_item_colon' => __( 'Parent Proposições:', 'proposicao' ),
    'not_found'  => __( 'No proposicaos found.', 'proposicao' ),
    'not_found_in_trash' => __( 'No proposicaos found in Trash.', 'proposicao' )
);

$args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'proposicao' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'Hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array( 'tipodeproposicao', 'esfera' ),
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields' ),
        'register_meta_box_cb' => 'add_proposicao_metaboxes',
    );



register_post_type( 'proposicao', $args );

}

function proposicao_admin() {
    /* Adiciona os metaboxes */
    function add_proposicao_metaboxes() {
        add_meta_box('wpt_proposicao_tipo', 'Tipo de Proposição', 'proposicao_metabox_tipo', 'proposicao', 'side', 'default');
        add_meta_box('wpt_proposicao_esfera', 'Esfera', 'proposicao_metabox_esfera', 'proposicao', 'side', 'default');
    }

    /* Display the post meta box. */
    function proposicao_metabox_tipo( $post ) { ?>

      <?php wp_nonce_field( basename( __FILE__ ), 'proposicao_metabox_tipo_nonce' ); ?>

      <p>
        <label for="wpt_proposicao_esfera">Tipo de Proposição</label>
        <br />
        <input class="widefat" type="text" name="wpt_proposicao_esfera" id="wpt_proposicao_esfera" value="<?php echo esc_attr( get_post_meta( $post->ID, 'wpt_proposicao_esfera', true ) ); ?>" size="30" />
      </p>
    <?php }

    /* Save metadata data */
    function proposicao_save_metabox_tipo( $post_id, $post ) {

      /* Verify the nonce before proceeding. */
      if ( !isset( $_POST['proposicao_metabox_tipo_nonce'] ) || !wp_verify_nonce( $_POST['proposicao_metabox_tipo_nonce'], basename( __FILE__ ) ) )
        return $post_id;

      /* Get the post type object. */
      $post_type = get_post_type_object( $post->post_type );

      /* Check if the current user has permission to edit the post. */
      if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
        return $post_id;

      /* Get the posted data and sanitize it for use as an HTML class. */
      $new_meta_value = ( isset( $_POST['wpt_proposicao_esfera'] ) ? sanitize_html_class( $_POST['wpt_proposicao_esfera'] ) : '' );

      /* Get the meta key. */
      $meta_key = 'wpt_proposicao_esfera';

      /* Get the meta value of the custom field key. */
      $meta_value = get_post_meta( $post_id, $meta_key, true );

      /* If a new meta value was added and there was no previous value, add it. */
      if ( $new_meta_value && '' == $meta_value )
        add_post_meta( $post_id, $meta_key, $new_meta_value, true );

      /* If the new meta value does not match the old value, update it. */
      elseif ( $new_meta_value && $new_meta_value != $meta_value )
        update_post_meta( $post_id, $meta_key, $new_meta_value );

      /* If there is no new meta value but an old value exists, delete it. */
      elseif ( '' == $new_meta_value && $meta_value )
        delete_post_meta( $post_id, $meta_key, $meta_value );
    }

}


?>