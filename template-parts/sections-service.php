<?php 
      $servicesub_title = get_field('section_sub_title','option'); 
      $servicetitle = get_field('section_title','option'); 
      



?>




  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6><?php echo esc_attr($servicesub_title); ?></h6>
            <h4><?php echo esc_attr($servicetitle); ?></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                

              <div class="col-lg-12">
                  <div class="menu">
            <?php 
            $servicename = get_field('services_name','option');
            foreach($servicename as $serviceicon){
              // var_dump($serviceicon);
              ?>
                <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="<?php echo esc_url( $serviceicon["service_icon"]) ?>" alt=""></span>
                        <?php echo esc_attr($serviceicon["service_name"]) ?>
                      </div>
                </div>

        
        
        <?php 
          
        } 
          
          ?>




                  </div>

                </div> 


                <div class="col-lg-12">
                  <ul class="nacc">


                  <?php 
                  $servicecontent = get_field('service_content','option'); 
                  foreach($servicecontent as $scontent){

                      ?>

                    <pre>

                    <?php  //var_dump($scontent)  ?>
                    </pre>
                    <?php  
                    
                    if ($scontent["true_or_false"] == true){
                      ?>
                      <li class="active">
                      <?php 
                    }else{
                      ?>

                      <li class="">
                        
                        <?php
                    }
                    
                    ?>
                    
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4><?php echo esc_attr($scontent["service_content_title"])?>
                              </h4>
                                <p><?php echo esc_attr($scontent["service_content_description"]) ?></p>
                               
                                <div class="ticks-list">
                                <?php 
                                $featurelist = $scontent["service_feature_list"];
                                foreach ($featurelist as $listfeature) {
                                  // var_dump($listfeature);
                                  ?>
                                  <span>
                                    <?php echo $listfeature['feature_icon']; ?>
                                    <?php echo $listfeature["feature_name"]; ?></span> 


                                  <?php 
                                }
                                ?>
                   
                              
              </div>
  
                                
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="<?php  echo esc_attr($scontent["services_image"]) ?>" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>



                <?php 



                  }
                  
                  ?>

                  
                  
                  
                  
                  
                  
                  
                  </ul>

                </div>    

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  