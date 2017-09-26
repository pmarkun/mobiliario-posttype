<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>

<div id="primary" class="mobiliario">
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php 
                $file = get_field('mob_fotos');
            ?>

            <div class="titulo">
            <h2><?php the_title(); ?></h2>
            </div>
            <div class="info">
                <div class="_esq">
                    <div class="_foto">
                        <img class="" src="<?php echo $file; ?>" />
                    </div>
                </div>
                
                <div class="_dir">
                <ul>
                    <li><b>Criador:</b> </li>
                    <li><b>Altura:</b> <?php the_field('mob_altura'); ?>/<?php the_field('banco_prop_ano'); ?></li>
                    <li><b>Comprimento:</b> <?php the_field('mob_comprimento'); ?></li>
                    <li><b>Largura (profundidade):</b> <?php the_field('mob_largura'); ?></li>
                    <li><b>Tamanho das chapas de papelão:</b> </li>
                    <li><b>Materiais extras:</b> <?php the_field('mob_extras'); ?></li>
                    <li><b>Tempo estimado de produção:</b> <?php the_field('mob_tempo'); ?></li>
                    <li><b>Resistência do Móvel:</b> <?php the_field('mob_resistencia'); ?></li>
                </ul>
                    
                </div>
            </div>
                <div class="botoes">

                <button id="baixar">Baixar</button>
                <button id="comprar">Comprar</button>
                <button id="comercializar">Quero Comercializar</button>
                </div>
        </div>

        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>