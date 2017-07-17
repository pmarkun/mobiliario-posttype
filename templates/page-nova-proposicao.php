<?php 

function my_kses_post( $value ) {
    
    // is array
    if( is_array($value) ) {
    
        return array_map('my_kses_post', $value);
    
    }
    
    
    // return
    return wp_kses_post( $value );

}

add_filter('acf/update_value', 'my_kses_post', 10, 1);
acf_form_head();

get_header();

?>
<div id="content">

    <?php
    
    acf_form(array(
        'post_id'       => 'new_post',
        'post_title'    => true,
        'post_content'  => false,
        'recaptcha' => true,
        'new_post'      => array(
            'post_type'     => 'proposicao',
            'post_status'   => 'draft'
        )
    ));
    
    ?>
    
</div>

<?php get_footer(); ?>