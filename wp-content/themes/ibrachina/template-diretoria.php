<?php
//Template Name: Diretoria
get_header();?>
<div class="diretores">
	<div class="container">
		<div class="row">
			<h2><?php the_title();?></h2>
			<div class="contato-head">
				<?php the_content();?>
			</div>
		</div>
	</div>

</div>

<div class="container">
		<div class="row">
	<?php if( have_rows('diretoria') ): ?>
		<div class="corpo-diretoria">
			<?php while( have_rows('diretoria') ): the_row(); $imageDest = get_sub_field('imagem_de_destaque');?>
				<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<?php echo wp_get_attachment_image( $imageDest, 'full', false, array ('class' => 'img-responsive' ) ); ?>
				</div>
				<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<?php echo wp_kses_post( get_sub_field('resumo') );?>

					<?php if( get_sub_field('linkedin') ): ?>
						<a class="btn btn-red" href="<?php echo wp_kses_post( get_sub_field('linkedin') );?>" target="_blank">Acompanhe no LinkedIn <i class="fa-brands fa-linkedin"></i></a>
					<?php endif; ?>
				</div>

				<hr>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>
</div>

	



<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>