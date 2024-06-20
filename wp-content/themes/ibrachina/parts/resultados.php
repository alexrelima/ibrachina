<div class="resultado">
	<div class="container">
		<div class="row">
			<?php $my_query = new WP_Query('page_id=22');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID;
			?>
				<?php if( have_rows('resultados') ): ?>
					<div class="placares owl-carousel owl-theme">
						<?php while( have_rows('resultados') ): the_row();?>
							<div class="item">
								<p><?php esc_html_e( 'Resultado do último jogo', 'ibrachina' ); ?> <?php echo acf_esc_html( get_sub_field('categoria') ); ?> - <?php echo acf_esc_html( get_sub_field('mandante') ); ?> <?php echo acf_esc_html( get_sub_field('placar_do_mandante') ); ?> x <?php echo acf_esc_html( get_sub_field('placar_do_visitante') ); ?> <?php echo acf_esc_html( get_sub_field('visitante') ); ?> </p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; wp_reset_query();?>
		</div>
	</div>
</div>