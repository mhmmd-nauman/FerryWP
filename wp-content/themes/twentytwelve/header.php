<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/half-slider.css" type="text/css" media="screen" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php //wp_head(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
 
</head>

<body >
     <header class="slide"> 
          
                                  
         
          </ul>
              <div class="nav_logo animated fadeInDown delay1">            
                <div class="container">
                    
                           
                    <div class="row-fluid">
                        
                          <!-- Logo-->
                        <div class="logo">
                            <ul>
                                <li><a href="http://internationalmachinery.eu/home-2/" title="Back to Home">                            
                                <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="VORKHEF"> 
                                 
                                 </a> 
                                 <li></li>
                            </ul>
                            
                        </div>
                        
                          <div class="span9">
                              
                             
                              <ul>
                                  <li> <?php wp_nav_menu()?></li>
                                  
                               </ul>
                                 
                          </div>
                        <!-- End Logo-->
                       <div class="wpml" style="    float: right;    margin-top: -23px; ">
                         <?php if ( dynamic_sidebar('home_right_1') ) : 
							else : ?>
						  <?php endif; ?>
                                </div>>
                     
                      </div>
                    </div>
                   
                </div>
                
              </div>
        
         <div style=" margin-top: 110px; background-color: #e1e1e1;" align="center">
            <?php do_action('slideshow_deploy', '113'); ?>
             <?php //wowslider(1);   ?> </div>   
             
             </div>
        </header> 
   <div class="volg">
          <div class=" container">
              <div class=" row">
                  <div align="center" class="volg-text">
                      Volgs ons ook online!
                  </div> 
                  <div align="center">
                   <?php if (function_exists("DISPLAY_ACURAX_ICONS")) { DISPLAY_ACURAX_ICONS(); } ?>
                  </div> 
              </div>
              
          </div>
          
      </div>
