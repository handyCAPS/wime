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
                <h1 class='quote'><?php 
                  $quote_pool = array(
                      'Logica brengt je van A naar B. Verbeelding brengt je overal. <br><span id="imageErkenning">- Albert Einstein</span>',
                      'Als je troebel water met rust laat, wordt het vanzelf helder. <br><span id="imageErkenning">- Lao-Tse</span>',
                      'De aarde biedt voldoende om ieders behoefte te bevredigen maar niet ieders hebzucht. <br><span id="imageErkenning">- Mahatma Gandhi</span>',
                      'De ergste vorm van ongelijkheid is proberen ongelijke dingen gelijk te maken. <br><span id="imageErkenning">- Aristoteles</span>',
                      'Kostbaar is de wijsheid die door ervaring wordt verkregen. <br><span id="imageErkenning">- R. Ascham</span>',
                      'Een mens heeft twee oren en een mond om twee keer meer te luisteren dan te praten. <br><span id="imageErkenning">- Confucius</span>',
                      'Te weten dat je onwetend bent is het begin van alle wijsheid. <br><span id="imageErkenning">- Viviane van Avelon</span>',
                      'Geluk hangt af van wat men kan geven, niet van wat men kan krijgen. <br><span id="imageErkenning">- Mahatma Gandhi</span>',
                      'Schildpadden kunnen meer over de weg vertellen dan hazen. <br><span id="imageErkenning">- Kahlil Gibran</span>',
                      'Boeken hebben, net als mensen, hun succes vaak aan hun titel te danken.<br><span id="imageErkenning">- Peter Sirius</span>',
                      'Wie rijk wil zijn, moet niet zijn vermogen vermeerderen maar zijn hebzucht verminderen.<br><span id="imageErkenning">- Plato</span>',
                      'Geef me werk wat bij me past en ik hoef nooit meer te werken.<br><span id="imageErkenning">- Confucius</span>',
                      'Een overdrijving is een waarheid die haar geduld heeft verloren.<br><span id="imageErkenning">- Kahlil Gibran</span>',
                      'De eerste eigenschap van stijl is helderheid.<br><span id="imageErkenning">- Aristoteles</span>',
                      'De ervaring doet onze wijsheid toenemen maar niet onze dwaasheden afnemen.<br><span id="imageErkenning">- Josh Billings</span>'
                    );
                  $zoek = floor(mt_rand(0, count($quote_pool)-1));
                  $front_quote = $quote_pool[$zoek];
                  echo $front_quote;
                 ?></h1>
              </div><!--  end imageQuote  -->
            </div><!--  end hero_image  -->
            </div><!--  end shadowWrapper  -->
          </header>
          <div id='main' role='main' class='fixedBox'>