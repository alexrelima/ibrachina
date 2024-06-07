<?php
//Template Name: Instalações
get_header();?>
<div class="contato-page">
	<div class="container">
		<div class="row">
			<h2><?php esc_html_e( 'Arena', 'ibrachina' ); ?> Ibrachina</h2>
			<div class="contato-head">
				<?php the_content();?>
			</div>
			<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<?php $foto_destaque = get_field('imagem_de_destaque');?>
				<?php echo wp_get_attachment_image( $foto_destaque, 'full', false, array ('class' => 'img-responsive' )); ?>
			</div>	
			<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6 comp">

				<h5><?php esc_html_e( 'Informações', 'ibrachina' ); ?></h5>

				<p><strong>Tel:</strong> <a href="">+55 (11) 2605-3903</a>
					<p><strong>E-mail:</strong> contato@ibrachinaarena.com.br</p>
					<p><strong><?php esc_html_e( 'Horário', 'ibrachina' ); ?>:</strong> <?php esc_html_e( 'Segunda a Sexta', 'ibrachina' ); ?> das 09h às 23h<br>
						<?php esc_html_e( 'Sábado e Domingo', 'ibrachina' ); ?> das 09h às 21h
					</p>

					

				<h5><?php esc_html_e( 'Localização', 'ibrachina' ); ?></h5>
					<p>R. Borges de Figueiredo, 1247-1359 - 1247-1359 - Mooca, São Paulo - SP, 03110-001</p>
					<a href="#" class="btn btn-red waze"><?php esc_html_e( 'Dirija-se com o Waze', 'ibrachina' ); ?> <i class="fa-brands fa-waze"></i></a>
			</div>	

			<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="instalacoes-title"><?php esc_html_e( 'Nossas Instalações', 'ibrachina' ); ?></h3>

				<div class="owl-carousel owl-theme owl-instalacoes">
					<?php if( have_rows('instalacoes') ): ?>
						<?php while( have_rows('instalacoes') ): the_row();  $foto = get_sub_field('foto');?>
							<div class="item">
								<?php echo wp_get_attachment_image( $foto, 'full' ); ?>
							</div>							
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>
<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>