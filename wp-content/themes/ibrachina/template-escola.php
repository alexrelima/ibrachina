<?php
//Template Name: Escola de Futebol
get_header();?>
<?php get_template_part('parts/porque');?>
<div class="atletas-ibra">
	<div class="container">
		<div class="row">
			<h2><?php esc_html_e( 'Elenco', 'ibrachina' ); ?> Ibrachina</h2>
			<div class="tabs">
				<div class="tab-opt">
					<ul>
						<?php if( have_rows('atletas_por_posicao') ): ?>
							<?php  $i = 1; while( have_rows('atletas_por_posicao') ): the_row(); ?>
							    <li>
								    <a href="#tab-<?php echo $i;?>"><?php echo esc_attr( get_sub_field('posicao') ); ?></a>
							    </li>
							<?php $i = $i + 1; endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<div class="tabs-content">
					<?php if( have_rows('atletas_por_posicao') ): ?>
							<?php  $i = 1; while( have_rows('atletas_por_posicao') ): the_row(); ?>
							    <div id="tab-<?php echo $i;?>">
							    	<div class="flex-tabs">

							    		<?php if( have_rows('elenco') ): ?>
							    			<?php while( have_rows('elenco') ): the_row();  $foto = get_sub_field('foto');?>
							    			
							    				<div class="jogador">
							    					<?php echo wp_get_attachment_image( $foto, 'full', false, array('class' => 'img-responsive') ); ?>
							    					<h3><?php echo esc_attr( get_sub_field('nome') ); ?></h3>
							    					<h4><?php esc_html_e( 'Camisa', 'ibrachina' ); ?> - <?php echo esc_attr( get_sub_field('camisa') ); ?></h4>
							    					<h5><?php echo esc_attr( get_sub_field('ano_de_nascimento') ); ?></h5>
							    				</div>
							    			
							    			<?php endwhile; ?>
							    		<?php endif; ?>
							    	</div>
							    </div>
							<?php $i = $i + 1; endwhile; ?>
					<?php endif; ?>					
				</div>

				<div class="convert">
					<div class="container">
						<div class="row">
							<div class="box-pq">
								<?php echo wp_kses_post( get_field('chamada_conversao') );?>
								<a href="" title="" class="btn btn-red"><?php esc_html_e( 'Quero fazer parte!', 'ibrachina' ); ?> <i class="fa-brands fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>