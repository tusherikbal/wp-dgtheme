<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php// wp_title(); ?>


   
<?php wp_head() ?>
  </head>

<body <?php body_class() ?> >

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
           
              
              <div class="logo">
                 
             <?php 
             $custom_logo_id = get_theme_mod( 'custom_logo' );
             $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
             $websitelink = esc_url(site_url());
             
             
        

             if ( has_custom_logo() ) {
               echo '<a href=" '.($websitelink) .' "><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"> </a>';
             }  

             

             ?>
             
            </div>




            
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <div>
            <?php 
           			   wp_nav_menu(array(
              		  'theme_location'=> 'primary-menu',
            			    'menu_class' => 'nav',
           		   ));          
                 ?>    
                 </div>        

           <a class='menu-trigger'>
                <span>Menu</span>
            </a> 

            <!-- ***** Menu End ***** -->



           




          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->