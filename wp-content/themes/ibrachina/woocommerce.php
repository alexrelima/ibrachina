<?php get_header();?>
<div class="breadcrumb-full">
	<div class="container">
		<?php woocommerce_breadcrumb(); ?>
	</div>
</div>
<div class="container">


<?php if(is_product_category()){ ?>    
	<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-3 filtro_collum">
		<h2 class="page-title-in title-left">Filtros</h2>
		<?php if ( dynamic_sidebar('widget_woocommerce') ) : else : endif; ?>
	</div>                   
	<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-9 woocommerce prod_collum">
		<?php woocommerce_content(); ?>
	</div>
<?php } else if(is_shop()){ ?>
	<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-3 filtro_collum">
		<h2 class="page-title-in title-left">Filtros</h2>
		<?php if ( dynamic_sidebar('widget_woocommerce') ) : else : endif; ?>
	</div>                       
	<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-9 woocommerce prod_collum">
		<?php woocommerce_content(); ?>
	</div>
<?php } else{ ?>
	<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 woocommerce prod_collum">
		<?php woocommerce_content(); ?>
	</div>
<?php } ?>


</div>
<?php get_footer();?>