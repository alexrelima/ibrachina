<?php get_header();?>
<div class="banner">
	<?php 
		$args = array('post_type' => 'banners', 'posts_per_page' => -1, 'order' =>'asc', 'orderby' =>'menu_order');
		$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post();

		$image = get_field('imagem_de_destaque');

	?>
		<div class="banner-full">
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-responsive full-bn zoom">
			<div class="banner-content">
				<div class="container">
					<div class="row">
						<?php the_field('chamada');?>
						<div class="buttons">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>contato/" title="" class="btn btn-red">Saiba Mais</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>contato/" title="" class="btn btn-red">Cadastre-se</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; wp_reset_query();?>
</div>

<div class="sobre">
	<img src="<?php bloginfo('template_directory');?>/images/sobre.png" alt="" class="img-responsive sobre-img">
	<div class="logo-vertical">
		<img src="<?php bloginfo('template_directory');?>/images/arena-logo.png" alt="" class="img-responsive">
	</div>
	<div class="container">
		<div class="row">
			<div class="col col-xs-12 col-sm-6 col-md-offset-6 col-md-6 col-lg-offset-6 col-lg-6">
				<span>Bem Vindo</span>
				<h2>título sobre <strong>ibrachina</strong></h2>

				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis se nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>

				<p>Amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae consequat auctor eu in elit. Class aptent taciti sociosqu ad</p>

				<p>torquent per conubia nostra, per inceptos himenaeos Mauris.</p>

				<a href="" class="btn btn-red">Saiba Mais</a>
			</div>
		</div>
	</div>
</div>

<div class="porque">
	<div class="container">
		<div class="row">
			<h2>Ibrachina F.C</h2>

			<div class="pq-head">
				<span>Porque o Ibrachina?</span>
				<h3>É <strong>por isso</strong> que você<br> <strong>não precisa</strong> mais procurar...</h3>
			</div>

			<div class="box-pq">
				<div class="box-itens">
					<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php bloginfo('template_directory');?>/images/treinamento.png" alt="">
						<h4>Treinamento</h4>
						<p>Treinamento eficaz por treinadores profissionais.</p>
					</div>
					<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php bloginfo('template_directory');?>/images/academia.png" alt="">
						<h4>Academia juvenil</h4>
						<p>Um ótimo programa de treinamento para jovens.</p>
					</div>
					<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php bloginfo('template_directory');?>/images/equipe.png" alt="">
						<h4>Equipe unida</h4>
						<p>Ser um jogador de equipe gera um sentimento com o esporte.</p>
					</div>
					<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php bloginfo('template_directory');?>/images/campeonatos.png" alt="">
						<h4>Campeonatos</h4>
						<p>Todos os nossos jogadores participam de campeonatos</p>
					</div>
				</div>
				<img src="<?php bloginfo('template_directory');?>/images/atleta.png" alt="" class="atleta">
			</div>
		</div>
	</div>
</div>


<div class="futuro">
	<div class="container">
		<div class="row">
			<h2><strong>Olhando para o futuro,</strong> faça parte da equipe!</h2>
			<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<img src="<?php bloginfo('template_directory');?>/images/melhores-medias.png" alt="" class="img-responsive">
				<div class="box-futuro">
					<h3>Atletas com as maiores médias no último jogo por categoria</h3>
					<a href="" class="btn btn-red">Nossos Destaques</a>
				</div>
			</div>
			<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<img src="<?php bloginfo('template_directory');?>/images/alem-do-futebol.png" alt="" class="img-responsive">
				<div class="box-futuro">
					<h3>muito além do futebol, aprenda com os melhores</h3>
					<a href="" class="btn btn-red">Inscreva-se</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="resultado">
	<div class="container">
		<div class="row">
			<?php $my_query = new WP_Query('page_id=22');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID;
			?>
				<?php if( have_rows('resultados') ): ?>
					<div class="placares owl-carousel owl-theme">
						<?php while( have_rows('resultados') ): the_row(); 
							?>
							<div class="item">
								<p>Resultado do último jogo <?php echo acf_esc_html( get_sub_field('categoria') ); ?> - <?php echo acf_esc_html( get_sub_field('mandante') ); ?> <?php echo acf_esc_html( get_sub_field('placar_do_mandante') ); ?> x <?php echo acf_esc_html( get_sub_field('placar_do_visitante') ); ?> <?php echo acf_esc_html( get_sub_field('visitante') ); ?> </p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; wp_reset_query();?>
		</div>
	</div>
</div>

<div class="patrocinadores">
	<div class="container">
		<div class="row">
			<?php $my_query = new WP_Query('page_id=34');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID;
			?>
				<h2><?php the_title();?></h2>
				<div class="patro-head">
					<span>Conheça</span>
					<h3>As marcas que apadrinham o sonho do time ibrachina</h3>
				</div>
				<?php if( have_rows('patrocinadores') ): ?>
						<?php while( have_rows('patrocinadores') ): the_row(); $image = get_sub_field('logotipo');?>
							<div class="item-patro">
								 <?php echo wp_get_attachment_image( $image, 'full' ); ?>
							</div>
						<?php endwhile; ?>
				<?php endif; ?>
				<a href="#" class="btn btn-red">Faça Parte</a>
			<?php endwhile; wp_reset_query();?>
		</div>
	</div>
</div>

<div class="insta">
	<div class="container">
		<div class="row">
			<h2><strong>+10K</strong> de <strong>seguidores</strong> nas redes</h2>
			<?php echo do_shortcode('[instagram-feed feed=1]')?>
		</div>
	</div>
</div>





<?php get_footer();?>