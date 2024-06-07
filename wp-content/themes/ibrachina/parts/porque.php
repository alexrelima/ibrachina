<div class="porque">
	<?php $my_query = new WP_Query('page_id=69');
		while ($my_query->have_posts()) : $my_query->the_post();
		$do_not_duplicate = $post->ID;

		$atleta = get_field('atleta');
	?>
		<div class="container">
			<div class="row">
				<h2>Ibrachina F.C</h2>

				<div class="pq-head">
					<span><?php esc_html_e( 'Porque o', 'ibrachina' ); ?> Ibrachina?</span>
					<?php the_content();?>
				</div>

				<div class="box-pq">
					<div class="box-itens">
						<?php if( have_rows('motivos_ibrachina') ): ?>
							<?php
								while( have_rows('motivos_ibrachina') ): the_row();
								$imageDestaque = get_sub_field('imagem_de_destaque');
							?>
								<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<?php echo wp_get_attachment_image( $imageDestaque, 'full' ); ?>
									<h4><?php echo acf_esc_html( get_sub_field('titulo') ); ?></h4>
									<p><?php echo acf_esc_html( get_sub_field('conteudo') ); ?></p>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<?php $atleta = get_field('atleta'); echo wp_get_attachment_image( $atleta, 'full', false, array ('class' => 'atleta' ) ); ?>
				</div>
			</div>
		</div>
	<?php endwhile; wp_reset_query();?>
</div>