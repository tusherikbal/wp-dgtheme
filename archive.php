<?php get_header(); ?>



<div id="blog" class="blog">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-6 offset-lg-4  wow fadeInDown single_article" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading ">
            <h6>Your archives</h6>
            <h4><?php single_cat_title(); ?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>


        <?php
            $args = array(
               'post_type' => 'post',
               'post_per_page' => 2
               
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();
               ?>

        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">

              <a href="#"><img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt=""></a>
            </div>

            <div class="down-content">

              <span class="category"><?php esc_attr(the_category()); ?></span>
               <span class="category"> By:<?php esc_attr(the_author()); ?> </span>
              <a href="#"><h4><?php esc_attr( the_title()) ?></h4></a>

              <span class="date"><?php esc_attr(the_date()); ?></span>

              <?php esc_attr(the_excerpt()); ?>


              
            
            </div>
          </div>

    

        </div>

   
        <?php
     } 
     wp_reset_postdata();
     ?>

        </div>
      </div>
    </div>
  </div> 





<?php get_footer(); ?>