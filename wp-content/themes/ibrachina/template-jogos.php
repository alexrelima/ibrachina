<?php
//Template Name: Próximos Jogos
get_header();?>
<div class="proximos-jogos">
	<div class="container">
		<div class="row">
			<h2><?php the_title();?></h2>
			<div class="contato-head">
				<?php the_content();?>
			</div>
			<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php if( have_rows('proximos_jogos') ): ?>
					<ul class="partidas-futuras">
						<?php while( have_rows('proximos_jogos') ): the_row(); 
							?>
							<li class="jogo">
								<div class="dados">
									<h3><?php echo wp_kses_post( get_sub_field('mandante') );?></h3> X <h3><?php echo wp_kses_post( get_sub_field('visitante') );?></h3>
								</div>
								<div class="data">
									<h4><span><?php echo wp_kses_post( get_sub_field('data') );?></span> - <?php echo wp_kses_post( get_sub_field('hora') );?></h4>
								</div>
								<div class="local">
									<h4><?php echo wp_kses_post( get_sub_field('evento') );?></h4>
									<h5><?php echo wp_kses_post( get_sub_field('local') );?></h5>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php $patro = get_field('imagem_de_destaque');?>
				<?php echo wp_get_attachment_image( $patro, 'full', false, array('class' => 'img-responsive')); ?>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('parts/resultados');?>

<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>