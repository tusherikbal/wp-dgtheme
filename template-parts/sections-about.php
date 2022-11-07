<?php 
    if(class_exists('ACF')){
                      $about_title = esc_attr(get_field('about_tittle','option'));    
                      $about_main_title = esc_attr(get_field('about_main_title','option'));    
                      $about_description = esc_attr(get_field('about_description','option'));    
                      $about_image = esc_attr(get_field('about_image','option'));    
                        
                     
    }
    ?>




<div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo esc_url($about_image) ?>" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6><?php echo esc_attr($about_title); ?></h6>
                  <h4><?php echo esc_attr($about_main_title); ?></h4>
                  <div class="line-dec"></div>
                </div>
                <p><?php echo esc_attr($about_description) ?></p>
                <div class="row">

                <?php 
                 if (class_exists('ACF')) {
                $about_description = get_field('about_skill','option');  
                foreach ($about_description as $skills) {
                
                 // var_dump($skills);
                  ?>


                <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>  
                        <div class="progress-value">
                          <div>
                            90%<br>
                            <span>Coding</span>
                          </div>
                        </div>
                      </div>
                    </div>
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
      </div>
    </div>
  </div>