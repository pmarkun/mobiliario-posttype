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

/**

* Register a proposicao post type.

*

*/


$config =  parse_ini_file('config.ini');

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
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields' ),
    );



register_post_type( 'proposicao', $args );

}


/* Define campos do form */

function proposicao_acf_init() {
    global $config;
    if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
    'key' => 'group_59569e5de77bd',
    'title' => 'Proposição Legislativa',
    'fields' => array (
        array (
            'key' => 'field_59569947669aa',
            'label' => 'Nome do proponente',
            'name' => 'banco_nome',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => -3,
        ),
        array (
            'key' => 'field_59569964669ab',
            'label' => 'Cargo do proponente',
            'name' => 'banco_cargo',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                'Vereador' => 'Vereador',
                'Deputado Estadual' => 'Deputado Estadual',
                'Deputado Federal' => 'Deputado Federal',
                'Senador' => 'Senador',
                'Prefeito' => 'Prefeito',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => '',
            'layout' => 'vertical',
            'return_format' => 'value',
        ),
        array (
            'key' => 'field_59569989669ac',
            'label' => 'Cidade',
            'name' => 'banco_cidade',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_59569997669ad',
            'label' => 'UF',
            'name' => 'banco_uf',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                'AC' => 'AC',
                'AL' => 'AL',
                'AM' => 'AM',
                'AP' => 'AP',
                'BA' => 'BA',
                'CE' => 'CE',
                'DF' => 'DF',
                'ES' => 'ES',
                'GO' => 'GO',
                'MA' => 'MA',
                'MG' => 'MG',
                'MS' => 'MS',
                'MT' => 'MT',
                'PA' => 'PA',
                'PB' => 'PB',
                'PE' => 'PE',
                'PI' => 'PI',
                'PR' => 'PR',
                'RJ' => 'RJ',
                'RN' => 'RN',
                'RO' => 'RO',
                'RR' => 'RR',
                'RS' => 'RS',
                'SC' => 'SC',
                'SE' => 'SE',
                'SP' => 'SP',
                'TO' => 'TO',
            ),
            'default_value' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        array (
            'key' => 'field_596ced9d74203',
            'label' => 'Telefone/Whatsapp',
            'name' => 'banco_telefone',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596cedc274204',
            'label' => 'Email',
            'name' => 'banco_email',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_596cedd274205',
            'label' => 'Tipo de proposição',
            'name' => 'banco_prop_tipo',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                'req_cpi' => 'Requerimento de CPI',
                'req_info' => 'Requerimento de Informação',
                'decreto' => 'Decreto Executivo',
                'mp' => 'Medida Provisória',
                'pl' => 'PL - Projeto de Lei Ordinária',
                'plp' => 'PLP - Projeto de Lei Complementar',
                'plv' => 'PLV - Projeto de Lei de Conversão',
                'pdc' => 'PDC - Projeto de Decreto Legislativo',
                'pec' => 'PEC - Proposta de Emenda à Constituição',
                'prc' => 'PRC - Projeto de Resolução',
            ),
            'allow_null' => 0,
            'other_choice' => 1,
            'save_other_choice' => 0,
            'default_value' => '',
            'layout' => 'vertical',
            'return_format' => 'label',
        ),
        array (
            'key' => 'field_596cee4574206',
            'label' => 'Número da proposição',
            'name' => 'banco_prop_numero',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
        ),
        array (
            'key' => 'field_596cee6b74207',
            'label' => 'Ano da proposição',
            'name' => 'banco_prop_ano',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
        ),
        array (
            'key' => 'field_596cee8674208',
            'label' => 'Área temática',
            'name' => 'banco_prop_tema',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                'Administração e Gestão Pública' => 'Administração e Gestão Pública',
                'Ciência e Tecnologia' => 'Ciência e Tecnologia',
                'Comunicação' => 'Comunicação',
                'Cultura' => 'Cultura',
                'Defesa do Consumidor' => 'Defesa do Consumidor',
                'Desenvolvimento Econômico (Indústria, Comércio, Serviços, etc)' => 'Desenvolvimento Econômico (Indústria, Comércio, Serviços, etc)',
                'Desenvolvimento Rural' => 'Desenvolvimento Rural',
                'Desenvolvimento Urbano' => 'Desenvolvimento Urbano',
                'Direitos Humanos (Mulheres, Racial, Étnico, LGBT, Pessoas com Deficiência, etc.)' => 'Direitos Humanos (Mulheres, Racial, Étnico, LGBT, Pessoas com Deficiência, etc.)',
                'Direitos e Políticas Sociais' => 'Direitos e Políticas Sociais',
                'Direitos Trabalhistas' => 'Direitos Trabalhistas',
                'Educação' => 'Educação',
                'Esporte e Lazer' => 'Esporte e Lazer',
                'Finanças e Tributação' => 'Finanças e Tributação',
                'Legislação Participativa e Cidadania' => 'Legislação Participativa e Cidadania',
                'Meio Ambiente e Desenvolvimento Sustentável' => 'Meio Ambiente e Desenvolvimento Sustentável',
                'Mobilidade Urbana' => 'Mobilidade Urbana',
                'Relações Exteriores' => 'Relações Exteriores',
                'Segurança Pública' => 'Segurança Pública',
                'Turismo' => 'Turismo',
            ),
            'allow_custom' => 1,
            'save_custom' => 0,
            'default_value' => array (
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
        ),
        array (
            'key' => 'field_596ceeb774209',
            'label' => 'Ementa da proposição',
            'name' => 'banco_prop_ementa',
            'type' => 'textarea',
            'instructions' => 'Breve resumo do projeto',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop',
        ),
        array (
            'key' => 'field_596cf03e8c225',
            'label' => 'Arquivo do projeto',
            'name' => 'banco_prop_arquivo',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'library' => 'all',
            'min_size' => '',
            'max_size' => 50,
            'mime_types' => 'pdf,docx,doc,odt,rtf',
        ),
        array (
            'key' => 'field_596ceee57420a',
            'label' => 'Grupos da Sociedade Cívil que apoiam a proposição',
            'name' => 'banco_prop_apoiadores',
            'type' => 'textarea',
            'instructions' => 'Escreva um por linha',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop',
        ),
        array (
            'key' => 'field_596cefa97420b',
            'label' => 'Comentários',
            'name' => 'banco_comentarios',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop',
        ),
        array (
            'key' => 'field_596cefc27420c',
            'label' => 'Status da proposição',
            'name' => 'banco_prop_status',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                'tramitando' => 'Em tramitação',
                'aprovado' => 'Aprovado',
                'rejeitado' => 'Rejeitado',
            ),
            'allow_custom' => 1,
            'save_custom' => 0,
            'default_value' => array (
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'label',
        ),
        array(
            'key'           => 'field_recaptcha',
            'name'          => 'recaptcha',
            'type'          => 'recaptcha',
            'label'         => 'Verifique que você não é um robo!',
            'site_key'      => $config['recaptcha_site'],
            'secret_key'    => $config['recaptcha_secret'],
            're_theme'      => 'light',     // Other options: 'dark'
            're_type'       => 'image',     // Other options: 'audio'
            're_size'       => 'normal',    // Other options: 'compact'
        )
    ),
    'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'proposicao',
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
    'position' => 'acf_after_title',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'excerpt',
        2 => 'discussion',
        3 => 'comments',
        4 => 'revisions',
        5 => 'slug',
        6 => 'author',
        7 => 'format',
        8 => 'featured_image',
        9 => 'categories',
        10 => 'tags',
        11 => 'send-trackbacks',
    ),
    'active' => 1,
    'description' => '',
));

endif;
}


function proposicao_page_init()
{
    if(is_page('nova-proposicao')){   
        $dir = plugin_dir_path( __FILE__ );
        include($dir."/templates/page-nova-proposicao.php");
        die();
    }
}

//route single- template
function proposicao_template_single_init($single_template){
  global $post;
  $found = locate_template('single-proposicao.php');
  if($post->post_type == 'proposicao' && $found == ''){
    $single_template = dirname(__FILE__).'/templates/single-proposicao.php';
  }
  return $single_template;
}

//route single- template
function proposicao_template_archive_init($archive_template){
  global $post;
  $found = locate_template('archive-proposicao.php');
  if(is_post_type_archive('proposicao') && $found == ''){
    $archive_template = dirname(__FILE__).'/templates/archive-proposicao.php';
  }
  return $archive_template;
}

/* Inicia ações */
add_action( 'init', 'proposicao_init' );
add_action( 'wp', 'proposicao_page_init' );
add_action('acf/init', 'proposicao_acf_init');
add_filter('single_template','proposicao_template_single_init', 99,1);
add_filter('archive_template','proposicao_template_archive_init', 99,1);

?>