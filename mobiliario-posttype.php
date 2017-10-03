<?php
/**

* Plugin Name: Mobiliario de papelão post type

* Plugin URI: github.com/fabricalivre

* Description: Um plugin de mobiliarios de papelão para o Wordpress

* Version:  1.0

* Author: LabHacker

* Author URI: http://labhacker.org.br

* License:  GPL2

*/

/**

* Register a mobiliario post type.

*

*/


$config =  parse_ini_file('config.ini');

function mobiliario_init() {

$labels = array(
    'name' => __( 'Mobiliarios', 'post type general name', 'mobiliario' ),
    'singular_name' => __( 'Mobiliario', 'post type singular name', 'mobiliario' ),
    'menu_name' => __( 'Mobiliarios', 'admin menu', 'mobiliario' ),
    'name_admin_bar'=> __( 'Mobiliario', 'add new on admin bar', 'mobiliario' ),
    'add_new'   => __( 'Add New', 'mobiliario', 'mobiliario' ),
    'add_new_item'=> __( 'Add New Mobiliario', 'mobiliario' ),
    'new_item'    => __( 'New Mobiliario', 'mobiliario' ),
    'edit_item'     => __( 'Edit Mobiliario', 'mobiliario' ),
    'view_item'   => __( 'View Mobiliario', 'mobiliario' ),
    'all_items'     => __( 'All Mobiliarios', 'mobiliario' ),
    'search_items'=> __( 'Search Mobiliarios', 'mobiliario' ),
    'parent_item_colon' => __( 'Parent Mobiliarios:', 'mobiliario' ),
    'not_found'  => __( 'No mobiliarios found.', 'mobiliario' ),
    'not_found_in_trash' => __( 'No mobiliarios found in Trash.', 'mobiliario' )
);

$args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'mobiliario' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'Hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields' ),
        'taxonomies'  => array( 'category' ),
    );



register_post_type( 'mobiliario', $args );

}


/* Define campos do form */

function mobiliario_acf_init() {
    global $config;
    if( function_exists('acf_add_local_field_group') ):

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
    'key' => 'group_596e44652f872',
    'title' => 'Mobiliario',
    'fields' => array (
        array (
            'key' => 'field_596e446da736d',
            'label' => 'Cadastre até 3 fotos',
            'name' => 'mob_fotos',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'jpg,png',
        ),
        array (
            'key' => 'field_596e461ca736e',
            'label' => 'Carregue o plano de corte (PDF)',
            'name' => 'mob_planodecorte',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => 'pdf',
        ),
        array (
            'key' => 'field_596e4639a736f',
            'label' => 'Carregue o guia de montagem (PDF)',
            'name' => 'mob_guiademontagem',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => 'pdf',
        ),
        array (
            'key' => 'field_596e4654a7370',
            'label' => 'Quais são as caracteristicas do móvel?',
            'name' => 'mob_nome',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Nome do móvel',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596e47a4a7371',
            'label' => 'Altura',
            'name' => 'mob_altura',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Altura',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596e47c0a7372',
            'label' => 'Comprimento',
            'name' => 'mob_comprimento',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Comprimento',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596e47dda7373',
            'label' => 'Largura',
            'name' => 'mob_largura',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Largura (profundidade)',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596e47f0a7374',
            'label' => 'Tamanho',
            'name' => 'mob_tamanho',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Tamanho das chapas de papelão',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596e4810a7375',
            'label' => 'Quantidade',
            'name' => 'mob_quantidade',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Quantidade das chapas de papelão',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
        ),
        array (
            'key' => 'field_596e482ba7376',
            'label' => 'Resistência',
            'name' => 'mob_resistencia',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Resistência do móvel',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596e485ca7377',
            'label' => 'Extras',
            'name' => 'mob_extras',
            'type' => 'textarea',
            'instructions' => 'Caso haja liste os materiais extras, assim fica
mais fácil a apresentação para o usuário',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop',
        ),
        array (
            'key' => 'field_596e48a9a7378',
            'label' => 'Tempo',
            'name' => 'mob_tempo',
            'type' => 'text',
            'instructions' => 'Pense que o usuário pode ter pouca estrutura então estime o tempo levando isso em consideração.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Tempo estimado para a produção do móvel',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596e48e7a7379',
            'label' => 'Bio',
            'name' => 'mob_bio',
            'type' => 'textarea',
            'instructions' => 'agora escreva uma mini bio sua, isso serve para a area de apresentação de nossos designers',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop',
        ),
        array (
            'key' => 'field_596e4920a737a',
            'label' => 'Tags',
            'name' => 'mob_tags',
            'type' => 'taxonomy',
            'instructions' => 'Marque as tags que você acha que vai se fuder',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => 'nolabel',
                'id' => '',
            ),
            'taxonomy' => 'category',
            'field_type' => 'checkbox',
            'allow_null' => 0,
            'add_term' => 1,
            'save_terms' => 1,
            'load_terms' => 1,
            'return_format' => 'object',
            'multiple' => 0,
        ),
    ),
    'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'mobiliario',
                ),
            ),
            array (
                array (
                    'param' => 'af_form',
                    'operator' => '==',
                    'value' => 'form_5956a0ac1edf1',
                ),
            ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'custom_fields',
        4 => 'discussion',
        5 => 'comments',
        6 => 'revisions',
        7 => 'slug',
        8 => 'author',
        9 => 'format',
        10 => 'page_attributes',
        11 => 'featured_image',
        12 => 'categories',
        13 => 'tags',
        14 => 'send-trackbacks',
    ),
    'active' => 1,
    'description' => '',
    'recaptcha' => 0,
));

endif;

endif;
}


function mobiliario_page_init()
{
    if(is_page('novo-mobiliario')){   
        wp_enqueue_style('mobiliario_form');
        $dir = plugin_dir_path( __FILE__ );
        include($dir."/templates/page-novo-mobiliario.php");
        die();
    }
}

//route single- template
function mobiliario_template_single_init($single_template){
  global $post;
  $found = locate_template('single-mobiliario.php');
  if($post->post_type == 'mobiliario' && $found == ''){
    $single_template = dirname(__FILE__).'/templates/single-mobiliario.php';
  }
  return $single_template;
}

//route single- template
function mobiliario_template_archive_init($archive_template){
  global $post;
  $found = locate_template('archive-mobiliario.php');
  if(is_post_type_archive('mobiliario') && $found == ''){
    $archive_template = dirname(__FILE__).'/templates/archive-mobiliario.php';
  }
  return $archive_template;
}

function mobiliario_register_style() {
    wp_register_style('mobiliario_form', plugins_url('templates/mobiliario.css',__FILE__ ));
}

function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'mobiliario'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}


/* Inicia ações */
add_action( 'init', 'mobiliario_init' );
add_action( 'wp', 'mobiliario_page_init' );
add_action('acf/init', 'mobiliario_acf_init');
add_action( 'wp_enqueue_scripts', 'mobiliario_register_style' );
add_filter('single_template','mobiliario_template_single_init', 99,1);
add_filter('archive_template','mobiliario_template_archive_init', 99,1);
add_filter('pre_get_posts', 'query_post_type');

?>