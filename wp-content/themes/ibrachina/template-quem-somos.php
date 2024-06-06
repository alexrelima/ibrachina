<?php
//Template Name: Quem somos
get_header();?>

<?php get_template_part('parts/sobre');?>
<div class="cbf">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<h2><?php esc_html_e( 'Clube formador CBF', 'ibrachina' ); ?></h2>
				<div class="cbf-head">
					<?php echo wp_kses_post( get_field('clube_formador') );?>
				</div>
			</div>
			<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php 
				    $cbf = get_field('imagem_cbf');
				    echo wp_get_attachment_image( $cbf, 'full' ); 
				?>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>