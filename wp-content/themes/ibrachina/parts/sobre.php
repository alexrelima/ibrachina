<div class="sobre">
	<?php $my_query = new WP_Query('page_id=53');
		while ($my_query->have_posts()) : $my_query->the_post();
		$do_not_duplicate = $post->ID;

		$image = get_field('imagem_de_destaque');
		$logotipo = get_field('logotipo');
	?>
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-responsive sobre-img">
		<div class="logo-vertical">
			<img src="<?php echo esc_url($logotipo['url']); ?>" alt="<?php echo esc_attr($logotipo['alt']); ?>" class="img-responsive">
		</div>
		<div class="container">
			<div class="row">
				<div class="col col-xs-12 col-sm-offset-6 col-sm-6 col-md-offset-6 col-md-6 col-lg-offset-6 col-lg-6">
					<span><?php esc_html_e( 'Bem Vindo', 'ibrachina' ); ?></span>
					<?php the_content();?>

					<?php if ( is_home() ) { ?>
    					<a href="" class="btn btn-red"><?php esc_html_e( 'Saiba Mais', 'ibrachina' ); ?></a>
    				<?php } ?>
				</div>
			</div>
		</div>
	<?php endwhile; wp_reset_query();?>
</div>