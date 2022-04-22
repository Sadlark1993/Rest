
<?php
	//Template Name: Sobre
?>

<?php get_header(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('imagem_sobre')?>" alt="<?php the_field('descricao_imagem_sobre')?>">
			</div>

			<!--Usei forca bruta, modelo ACF gratis. No cardapio eu uso o modelo do PRO: repeater.-->
			<div class="grid-8">
				<h2><?php the_field('titulo_historia');?></h2>
				<?php the_field('campo_historia');?>
				<h2><?php the_field('titulo_visao');?></h2>
				<?php the_field('campo_visao');?>
				<h2><?php the_field('titulo_valores');?></h2>
				<?php the_field('campo_valores');?>
			</div>
		</section>
		<?php get_footer(); ?>
