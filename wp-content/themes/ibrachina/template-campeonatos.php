<?php
//Template Name: Campeonatos
get_header();?>
<div class="contato-page">
	<div class="container">
		<div class="row">
			<h2><?php the_title();?></h2>
			<div class="contato-head">
				<?php the_content();?>
			</div>
			

			<div class="galerias">
				<?php if( have_rows('galeria_de_campeonatos') ): ?>
					
						<?php $count = 1; while( have_rows('galeria_de_campeonatos') ): the_row();?>
							<h3><?php echo wp_kses_post( get_sub_field('nome_do_campeonato') );?></h3>
							<?php if( have_rows('galeria_de_imagens') ): ?>
								<div class="owl-camp owl-carousel owl-theme">
									<?php  while( have_rows('galeria_de_imagens') ): the_row(); $imagem = get_sub_field('imagem');?>
										<div class="item">
											<a data-fancybox="galerry-<?php echo $count;?>" href="<?php echo esc_url($imagem['url']); ?>">
												<img src="<?php echo esc_url($imagem['url']); ?>" alt="" class="img-responsive">
											</a>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php  $count =  $count + 1; endwhile; ?>
				<?php endif; ?>
			</div>	
		</div>
	</div>
</div>
<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>