	<?php
		//Template Name: Contato
	?>
	
	<?php get_header(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="<?php the_field('link_mapa'); ?>" target="_blank"><img src="<?php the_field('url_imagem_mapa'); ?>" 
				alt="<?php the_field('descricao_imagem_mapa') ?>"></a>
			</div>
			
			<?php if(have_rows('categoria_contato')): while(have_rows('categoria_contato')): the_row();?>
			<div class="grid-1-3 contato-item">
				<h2><?php the_sub_field('contato_tipo'); ?></h2>
				<?php the_sub_field('contato_dados'); ?>
			</div>
			<?php endwhile; endif; ?>

		</section>

	<?php get_footer(); ?>