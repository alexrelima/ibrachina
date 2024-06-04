<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class('responsivo'); ?>>
    <header itemscope itemtype="http://schema.org/Organization">
      <div class="container">
        <div class="row">
          <h1 class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ibrachina">
              <span itemprop="image">
                <img src="<?php bloginfo('template_directory');?>/images/logotipo.png" alt="Ibrachina" title="Ibrachina" class="img-responsive">
              </span>
            </a>
          </h1>
          <div class="header-content">
            <div class="idiomas">
              <?php do_action( 'wpml_add_language_selector' );?>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'menu-principal'));?>
          </div>
        </div>
      </div>
    </header>
