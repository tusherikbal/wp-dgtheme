



  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="<?php echo esc_attr(get_template_directory_uri()) ?>./assets/images/contact-dec.png" alt="">
                </div>
              </div>
              <div class="col-lg-4">
                <div id="map">
                  <iframe src="<?php echo esc_url(get_theme_mod('gmap')); ?>" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?php echo esc_url(get_template_directory_uri()) ?>./assets/images/phone-icon.png" alt="">
                          <a href="#"><?php  echo esc_attr(get_theme_mod('phone_setting')); ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?php echo esc_url(get_template_directory_uri()) ?>./assets/images/email-icon.png" alt="">
                          <a href="#"><?php  echo esc_attr(get_theme_mod('email_setting')); ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?php echo esc_url(get_template_directory_uri()) ?>./assets/images/location-icon.png" alt="">
                          <a href="#"><?php  echo esc_attr(get_theme_mod('address_setting')); ?></a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-12">
                      <?php  
                      
                    echo do_shortcode( '[contact-form-7 id="14" title="Contact form 1"]' );

                      ?>
                   




                    </div>

                    
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

