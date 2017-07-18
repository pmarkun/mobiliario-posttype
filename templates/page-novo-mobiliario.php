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
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


    <?php
    
    acf_form(array(
        'post_id'       => 'new_post',
        'post_title'    => true,
        'post_content'  => false,
        'recaptcha' => true,
        'new_post'      => array(
            'post_type'     => 'mobiliario',
            'post_status'   => 'draft'
        )
    ));
    
    ?>
    
        </main>
    </div>
</div>

<?php get_footer(); ?>