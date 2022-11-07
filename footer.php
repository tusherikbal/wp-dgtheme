
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p><?php echo  esc_attr(get_theme_mod('footer_copyright_setting')) ; ?>. 
          <br>Design: <?php echo esc_attr(get_theme_mod('footer_author_setting')); ?></p>
          </div>

          <div class="container pt-2 d-flex justify-content-center">
          <!-- Section: Social media -->
          <section class="mb-2">
            <!-- Facebook -->
            <a class="btn btn-link btn-floating btn-lg text-light m-1" href="<?php echo esc_attr(get_theme_mod('footer_social_facebook')); ?>" role="button" data-mdb-ripple-color="dark" ><i class="fa fa-facebook-f">
              </i> </a>

            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="<?php echo esc_attr(get_theme_mod('footer_social_twitter')); ?>"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fa fa-twitter"></i
            ></a>

            <!-- Google -->
            

            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="<?php echo esc_attr(get_theme_mod('footer_social_insta')) ?>"
              role="button"
              data-mdb-ripple-color="light"
              ><i class="fa fa-instagram"></i
            ></a>

            <!-- Linkedin -->

            <?php  
              if ('footer_social_linkdin') {
                ?>

                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="<?php echo esc_attr(get_theme_mod('footer_social_linkdin')); ?>" role="button" data-mdb-ripple-color="dark"><i class="fa fa-linkedin">

                </i
              ></a>

              <?php
              }
            
            ?>
           

            <!-- Github -->
            
          </section>
          <!-- Section: Social media -->
        </div>
       
      </div>
    </div>
  </footer>


  <!-- Scripts -->





  <?php wp_footer(); ?>
</body>
</html>