
   <?php 
          if(class_exists('ACF')){
            $service_sub_title = get_field('section_sub_title','option'); 
            $service_main_title = get_field('section_title','option'); 


          }
   ?>
   
   <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6><?php echo esc_attr($service_sub_title);  ?></h6>
            <h4><?php echo esc_attr($service_main_title);  ?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">

          <?php 

           if (class_exists('ACF')) {
            $servicecontent = get_field('projects','option'); 
            foreach($servicecontent as $portfolio){
                // var_dump($portfolio);

              ?>


          <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo esc_url($portfolio["projects_image"]); ?>" alt="">
                  <?php  
                    // var_dump($portfolio["projects_image"])
                  
                  ?>
                </div>
                <div class="down-content">
                  <h4><?php echo esc_attr($portfolio["projects_title"]); ?></h4>
                  <span><?php echo esc_attr($portfolio["project_category"]); ?></span>
                </div>
              </div>
              </a>  
            </div>


            
          <?php
            } 
          }
          ?>
            
          


          </div>
        </div>
      </div>
    </div>
  </div>
  