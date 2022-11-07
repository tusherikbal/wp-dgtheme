<?php get_header(); ?>




<div id="blog" class="blog">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-6 offset-lg-4  wow fadeInDown single_article" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading ">
            <h6>Your Articles</h6>
            <h4><?php esc_attr(the_title()); ?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        
        <div class="col-lg-8 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">

              <a href="#"><img src="<?php echo esc_attr(the_post_thumbnail_url()); ?>" alt=""></a>
            </div>

            <div class="down-content">

              <span class="category"><?php esc_attr(the_category()); ?> <?php esc_attr(the_author()); ?> 
            </span>
              <a href="#"><h4><?php esc_attr(the_title()) ?></h4></a>

              <span class="date"><?php esc_attr(the_date()); ?></span>

              <?php esc_attr(the_content()); ?>


              
            
            </div>
          </div>
        </div>

        
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="p-3">
            <h4>Latest post</h4>
            </div>
            
            <div class="thumb">
              <a href="#"><img src="<?php echo esc_attr(the_post_thumbnail_url()); ?>" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category"><?php esc_attr(the_category()); ?>
            </span>
            <span>
            <h4><?php esc_attr(the_title()) ?></h4></span>
           
            <span>  <?php esc_attr(the_excerpt()) ?></span>
   
          </div>

       


          
            
            
            <div class="thumb">
              <a href="#"><img src="<?php echo esc_attr(the_post_thumbnail_url()); ?>" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category"><?php esc_attr(the_category()); ?>
            </span>
            <span>
            <h4><?php esc_attr(the_title()) ?></h4></span>
           
            <span>  <?php esc_attr(the_excerpt()) ?></span>
   
          </div>
        </div>


         
           
            
            <div class="thumb">
              <a href="#"><img src="<?php echo esc_attr(the_post_thumbnail_url()); ?>" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category"><?php esc_attr(the_category()); ?>
            </span>
            <span>
            <h4><?php esc_attr(the_title()) ?></h4></span>
           
            <span>  <?php esc_attr(the_excerpt()) ?></span>
   
          </div>
        </div>

        </div>



      </div>
    </div>
  </div> 





<?php get_footer(); ?>