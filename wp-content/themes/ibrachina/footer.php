<?php $opcoes = get_option('wptester_theme_settings'); ?>
<footer>
	<img src="<?php bloginfo('template_directory');?>/images/footer-bg.png" alt="" class="img-responsive footer-img">
	<div class="container">
		<div class="row">
			<div class="sobre-footer">
			<h5>Ibrachina F.C.</h5>
				<?php $my_query = new WP_Query('page_id=53');
					while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate = $post->ID;	
				?>
					<div class="content-footer">
						<?php the_field('conteudo_footer');?>
					</div>
				<?php endwhile; wp_reset_query();?>
			</div>
			<div class="info-footer">
				<h5>Arena Ibrachina</h5>
				<?php $my_query = new WP_Query('page_id=272');
					while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate = $post->ID;	
				?>
					<div class="content-footer">
						<?php the_field('chamada_rodape');?>
						<p>Tel: <a href="tel:551126053903">+55 (11) 2605-3903</a>
						<p>E-mail: contato@ibrachinafc.com.br</p>
						<p><?php esc_html_e( 'Horário', 'ibrachina' ); ?>: <?php esc_html_e( 'Segunda a Sexta', 'ibrachina' ); ?> das 09h às 23h<br>
						<?php esc_html_e( 'Sábado e Domingo', 'ibrachina' ); ?> das 09h às 21h</p>
						<p><?php esc_html_e( 'Endereço', 'ibrachina' ); ?>: R. Borges de Figueiredo, 1325 - Mooca, São Paulo - SP, 03110-001</p>
					</div>
				<?php endwhile; wp_reset_query();?>
			</div>
			<div class="siga">
				<h5><?php esc_html_e( 'Siga o', 'ibrachina' ); ?> Ibrachina</h5>
				<div class="content-footer">
					<ul>
						<li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="https://instagram.com/ibrachinafc" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="copy">
		<div class="container">
			<div class="row">
				<p>&copy; Ibrachina FC</p>
				<p class="dev"><?php esc_html_e( 'Desenvolvido por', 'ibrachina' ); ?> <a href="https://imaginy.com.br" target="_blank">Agência Imaginy</a> <?php esc_html_e( 'e', 'ibrachina' ); ?> <a href="#" target="_blank">Geek Conteúdo</a></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer();?>
</body>
</html>
