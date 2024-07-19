<?php
//Template Name: Trabalhe Conosco
get_header();?>
<div class="contato-page trabalhe-page">
	<div class="container">
		<div class="row">
			<h2><?php the_title();?></h2>
			<div class="contato-head">
				<?php the_content();?>
			</div>

			<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="content-trabalhe">
					<?php the_field('chamada_trabalhe_conosco'); ?>
				</div>
			</div>
			<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<form id="form-contact" method="POST" enctype="multipart/form-data" action="<?php bloginfo('template_directory');?>/php/sendcontact.php">
					<input type="text" name="name" placeholder="<?php esc_html_e( 'Nome', 'ibrachina' ); ?>" required class="dados">
					<input type="email" name="email" placeholder="<?php esc_html_e( 'E-mail', 'ibrachina' ); ?>" required class="dados">
					<input type="text" name="cell-phone" placeholder="<?php esc_html_e( 'Celular', 'ibrachina' ); ?>" class="form-cell fullphone dados">
					<textarea name="mensagem" id="" placeholder="<?php esc_html_e( 'Digite sua mensagem', 'ibrachina' ); ?>"></textarea>
					<div class="box-envio">
						<label for="file"><?php esc_html_e( 'Envie seu currículo', 'ibrachina' ); ?></label>
						<input type="file" name="file">
					</div>
					<input type="submit" name="send" value="<?php esc_html_e( 'Enviar currículo', 'ibrachina' ); ?>"  class="btn btn-red">
				</form>
			</div>
			<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6 comp">

				<h5><?php esc_html_e( 'Informações', 'ibrachina' ); ?></h5>

				<p><strong>Tel:</strong> <a href="">+55 (11) 2605-3903</a>
					<p><strong>E-mail:</strong> contato@ibrachinaarena.com.br</p>
					<p><strong><?php esc_html_e( 'Horário', 'ibrachina' ); ?>:</strong> <?php esc_html_e( 'Segunda a Sexta', 'ibrachina' ); ?> das 09h às 23h<br>
						<?php esc_html_e( 'Sábado e Domingo', 'ibrachina' ); ?> das 09h às 21h
					</p>
					<a href="#" class="map"><i class="fa-solid fa-map"></i> <?php esc_html_e( 'Nosso Endereço', 'ibrachina' ); ?></a>

					<h5><?php esc_html_e( 'Siga o', 'ibrachina' ); ?> Ibrachina</h5>
					<div class="content-comp">
						<ul>
							<li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
			</div>				
		</div>
	</div>
</div>
<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>