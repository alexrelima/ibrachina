<?php
//Template Name: Na Mídia
get_header();?>
<div class="na-midia">
	<div class="container">
		<div class="row">
			<h2><?php the_title();?></h2>
			<div class="contato-head">
				<?php the_content();?>
			</div>
			
			<?php 
				$args = array('post_type' => 'post', 'posts_per_page' => -1, 'order' =>'asc', 'orderby' =>'menu_order');
				$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post();
				$image = get_field('imagem_de_destaque');
			?>
				<div class="col col-xs-12 col-sm-6 col-md-3 col-lg-3 item-midia">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-responsive">
					<div class="box-midia">
						<h3><a href="<?php echo wp_kses_post( get_field('url_da_materia') );?>" target="_blank"><?php the_title();?></a></h3>
                        <a href="<?php echo wp_kses_post( get_field('url_da_materia') );?>" target="_blank">Ler Artigo</a>
					</div>
				</div>
			<?php endwhile; wp_reset_query();?>
		</div>
	</div>
</div>

<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>