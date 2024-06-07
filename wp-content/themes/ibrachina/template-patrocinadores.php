<?php 
//Template Name: Patrocinadores
get_header();?>
<div class="patrocinadores">
	<div class="container">
		<div class="row">

			<h2><?php the_title();?></h2>
			<div class="patro-head">
				<span><?php esc_html_e( 'Conheça', 'ibrachina' ); ?></span>
				<?php the_content();?>
			</div>
			<?php if( have_rows('patrocinadores') ): ?>
				<div class="flex">
				<?php  while( have_rows('patrocinadores') ): the_row();  $patro = get_sub_field('logotipo');?>
				<div class="item-patro <?php echo $i;?>">
					<a href="<?php echo esc_attr( get_sub_field('link_de_redirecionamento') ); ?>" target="_blank">
						<?php echo wp_get_attachment_image( $patro, 'full', false, array('class' => 'img-responsive')); ?>
					</a>
				</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="convert">
	<div class="container">
		<div class="row">
			<div class="box-pq">
				<?php echo wp_kses_post( get_field('chamada_conversao') );?>
				<a href="" title="" class="btn btn-red"><?php esc_html_e( 'Quero ser um apoiador!', 'ibrachina' ); ?> <i class="fa-brands fa-whatsapp"></i></a>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('parts/insta');?>
<?php get_footer();?>