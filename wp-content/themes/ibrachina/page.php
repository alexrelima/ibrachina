<?php get_header();?>
<div class="breadcrumb-full">
	<div class="container">
		<?php woocommerce_breadcrumb(); ?>
	</div>
</div>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 text-content">
			<h1 class="page-title-in"><?php the_title(); ?></h1>
			<?php the_content();?>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer();?>