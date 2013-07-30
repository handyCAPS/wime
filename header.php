<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class='no-js' lang='en'>
  <!--<![endif]-->
  <head>
    <meta charset='utf-8' />
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
    <title>
      <?php 
        if (is_home() && !is_page()){
              bloginfo('name'); echo " | "; the_title();
            }
            elseif (is_home() && is_page()) {
              bloginfo('name'); wp_title( ' | ', true, 'left' );
              }  
            else {
                wp_title( ' | ', true, 'right' );  bloginfo('name');
          }
       ?>
    </title>
    <meta content='<?php bloginfo('description'); ?>' name='description' />
    <meta content='ICT-Lab | Tim Doppenberg' name='author' />
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    <link href='<?php echo VLUCHTPAD; ?>/css/style.css' rel='stylesheet' />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <div id='container'>
        <header>
          <div id='logo'>
             <div id='front-quote'>
              <h2 class='quote'>Een druppel inkt kan miljoenen aan het denken zetten.<br><div id='erkenning'>- Lord George Byron</div></h2>
            </div>
            <img id='logoImage' src="<?php echo VLUCHTPAD; ?>/images/logo_384x188.png">
          </div>
          <div id='shadowWrapper'>
            <nav id='mainNav'>
             <?php wp_nav_menu( array(
               'theme_location'  => 'header_menu',
               'menu'            => '', 
               'container'       => 'nav', 
               'container_class' => 'menu-{menu slug}-container', 
               'container_id'    => 'mainNav',
               'menu_class'      => 'menu', 
               'menu_id'         => '',
               'echo'            => true,
               'fallback_cb'     => 'wp_page_menu',
               'before'          => '',
               'after'           => '',
               'link_before'     => '',
               'link_after'      => '',
               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
               'depth'           => 0,
               'walker'          => '' ) ); ?>
            </nav>
  
            <div id='hero_image'>
              <div id='imageQuote'>
                <h1 class='quote'>Boeken hebben, net als mensen, hun succes vaak aan hun titel te danken.<br><span id='imageErkenning'>- Peter Sirius</span></h1>
              </div><!--  end imageQuote  -->
            </div><!--  end hero_image  -->
            </div><!--  end shadowWrapper  -->
          </header>
          <div id='main' role='main' class='fixedBox'>