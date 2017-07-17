<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>

<div id="primary">
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php 
                $file = get_field('banco_prop_arquivo');
            ?>

            <ul>
                <li><b>Título:</b> <?php the_title(); ?></li>
                <li><b>Número/Ano</b> <?php the_field('banco_prop_numero'); ?>/<?php the_field('banco_prop_ano'); ?></li>
                <li><b>Tipo:</b> <?php the_field('banco_prop_tipo'); ?></li>
                <li><b>Ementa:</b> <?php the_field('banco_prop_ementa'); ?></li>
                <li><b>Temas:</b> <?php the_field('banco_prop_tema'); ?></li>
                <li><b>Arquivo:</b> <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a></li>
                <li><b>Apoiadores:</b> <?php the_field('banco_prop_apoiadores'); ?></li>
                
            </ul>

            <ul>
                <li><b>Nome do Proponente:</b>  <?php the_field('banco_nome'); ?></li>
                <li><b>Cargo do Proponente:</b> <?php the_field('banco_cargo'); ?></li>
                <li><b>Cidade/UF:</b> <?php the_field('banco_cidade'); ?>/<?php the_field('banco_uf'); ?></li>
            </ul>


        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>