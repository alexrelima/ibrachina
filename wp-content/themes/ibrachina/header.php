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
    <?php 

      $opcoes = get_option('wptester_theme_settings'); 

      $ddd =  $opcoes['contatos_ddd'];
      $tel1 = $opcoes['contatos_telefone'];

      $searchVal = array("-", " ", "(", ")",); 
      $replaceVal = array("", "", "", ""); 

      $t_ddd = str_replace($searchVal, $replaceVal, $ddd); 
      $t_tel1 = str_replace($searchVal, $replaceVal, $tel1);

      $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
      $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
      $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
      $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
      $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

    ?>
    <header itemscope itemtype="http://schema.org/Organization">
      <div class="container">
        <div class="row">
          <h1 class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Agência Imaginy">
              <span itemprop="image">
                <img src="<?php bloginfo('template_directory');?>/images/imaginy.png" alt="Imaginy" title="Agência Imaginy" class="img-responsive">
              </span>
            </a>
          </h1>
          <!--<?php wp_nav_menu(array('theme_location' => 'menu-principal'));?>-->

          <?php if ($iphone || $android || $palmpre || $ipod || $berry == true) { ?>
            <div class="phone p-whats">
              <a title="contate-nos via whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $t_ddd;?><?php echo $t_tel1;?>&amp;text=Olá,%20estou%20navegando%20no%20site%20da%20EMPRESA%20XYX%20Você%20pode%20me%20ajudar?" rel="nofollow" target="_blank" class="wpp">
               <?php echo $opcoes['contatos_ddd'];?> <?php echo $opcoes['contatos_telefone'];?> <i class="fa-brands fa-whatsapp"></i>
             </a>
           </div>
         <?php } else { ?>
          <div class="phone p-whats">
            <a title="contate-nos via whatsapp" href="https://web.whatsapp.com/send?phone=55<?php echo $t_ddd;?><?php echo $t_tel1;?>&amp;text=Olá,%20estou%20navegando%20no%20site%20da%20EMPRESA%20XYX%20Você%20pode%20me%20ajudar?" rel="nofollow" target="_blank" class="wpp">
              <?php echo $opcoes['contatos_ddd'];?> <?php echo $opcoes['contatos_telefone'];?> <i class="fa-brands fa-whatsapp"></i>
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </header>
