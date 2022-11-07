<?php get_header();

 /*
        Template Name: Home template
    */

?>



  <!-- acf functions part -->
    <?php 
    if(class_exists('ACF')){
                      $hero_sub = get_field('hero_sub_title','option');    
                      $hero_title = get_field('hero_title','option'); 
                      $hero_paragraph = get_field('hero_paragraph','option');
                      $hero_btn = get_field('free_qoutes','option'); 
                      $hero_img = get_field('hero_main_image','option'); 
    }
    ?>
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6><?php echo esc_attr($hero_sub) ?></h6>
                    <h2><?php echo esc_attr($hero_title) ?></h2>
                    <p><?php echo esc_attr($hero_paragraph) ?></p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="<?php echo esc_attr($hero_btn)  ?>">Free Quote</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              


                <img src="<?php echo esc_url($hero_img); ?>" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- about us section -->

  <?php get_template_part('template-parts/sections','about'); ?>





<!-- servicess -->
<?php get_template_part('template-parts/sections','service'); ?>


  <!-- free qoutes section  -->
  <?php get_template_part('template-parts/sections','freeqoute'); ?>



    <!-- portfolio section -->
  <?php get_template_part('template-parts/sections','portfolio'); ?>



  <!-- blog section -->


  
  


  <!-- <pre>
  <?php// var_dump($homepost); ?>
  </pre> -->

  <?php  
  
      if(class_exists('ACF')){
    $homepost= get_field('main_feature_blog','option');
   
  }
  ?>



<!-- ///////// -->

      <div id="blog" class="blog">
          <div class="container">
          <div class="row">
          <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
          <h6>Recent News</h6>
          <h4>Check Our Blog <em>Posts</em></h4>
          <div class="line-dec"></div>
          </div>
          </div>

            <?php
            $args = array(
               'post_type' => 'post',
               'posts_per_page' => 2
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();
               ?>


        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="<?php echo esc_url(the_post_thumbnail_url());  ?>" ></a>
            </div>
            <div class="down-content">
              <span class="category"><?php esc_attr(the_category()); ?></span>
              <span class="date"><?php esc_attr(the_date()); ?></span>
              <a href="#"><h4><?php esc_attr(the_title()) ?></h4></a>
              <p><?php esc_attr(the_excerpt()); ?></p>
              <span class="author">By: <?php esc_attr(the_author()); ?></span>
              <div class="border-first-button"><a href="<?php esc_attr(the_permalink()); ?>">Discover More</a></div>
            </div>
          </div>
        </div>


        <?php } ?>


      </div>


    </div>
  </div>  







   <!-- contact section -->
   <?php get_template_part('template-parts/sections','contact'); ?>


  <?php get_footer(); ?>