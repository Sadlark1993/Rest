<?php
	//Template Name: Menu da Semana
?>
<!--Sei la pq colocar loop aqui. Vou deixar pra testar, mas nas outras paginas não coloco.-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<?php get_header(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<?php if(have_rows('categoria_menu')): while(have_rows('categoria_menu')): the_row();?>
				<div class="menu-prato grid-8">
					<h2><?php the_sub_field('nome_categoria');?></h2>
					<ul>
						<?php if(have_rows('pratos')): while(have_rows('pratos')): the_row();?>
						<li>
							<span><sup>R$</sup><?php the_sub_field('preco');?></span>
							<div>
								<h3><?php the_sub_field('nome_prato');?></h3>
								<p><?php the_sub_field('descricao_prato');?></p>
							</div>
						</li>
						<?php endwhile; endif; ?>
					</ul>
				</div>
			<?php endwhile; endif; ?>
		</section>
		<?php endwhile; endif;?>
		<?php get_footer(); ?>
