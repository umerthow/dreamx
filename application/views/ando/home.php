  <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">

                                <div class="hello_slid">


                                    <?php

                                    $banner_hitung=0;
                                    foreach ($banner_depan as $key => $value) {
                                        echo "<div class='slid_item'>";
                                            echo "<div class='home_text'>";
                                                 echo"<h1 class='text-white'>$value[header]</h1>";
                                                 echo"<h3 class='text-white'>$value[caption]</h3>";
                                            echo"</div>";

                                            echo "<div class='home_btns m-top-40'>";
                                                        echo"<a href='$value[link_href]' class='btn btn-primary m-top-20'>$value[link_text]</a>";
                                                        echo"<a href='' class='btn btn-default m-top-20'>Learn more</a>";
                                            echo "</div>";
                                               
                                        echo "</div>";
                                        $banner_hitung++;
                                    }

                                     ?>


                                </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

<!--Featured Section-->
         <!--    <section id="features" class="features bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-6">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-medical"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Best Quality Design</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-clock2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Responsive Design</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item m-top-70">
                                    <div class="f_item_icon">
                                        <i class="icon icon-adjustments"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Easy to Customize</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item m-top-70">
                                    <div class="f_item_icon">
                                        <i class="icon icon-tablet2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Best Quality Design</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section--> 




            <section id="feature" class="section-padding wow fadeIn delay-05s">
              <div class="container">
             
                <div class="row">
                 <div class="main_features fix roomy-40">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    
                                     <h2 class="text-uppercase"> Why you must be our partner</h2>
                                    
                                </div>
                            </div>

               <?php

                if( !empty($section1) ) {
                        foreach ($section1 as $key => $value) { ?>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                              <div class="item-img">
                                <img src="<?php echo $value['picture'] ?>">
                              </div>
                              <h3 class="pad-bt15"><?php echo $value['caption_title'] ?></h3>
                              <p><?php echo $value['caption_item'] ?></p>
                            </div>
                          </div>
                        <?php } ?>
                <?php } ?>

                  <div class="m-top-20 wow bounceInDown delay-05s" >
                  
                                   
                                    <div class="col-md-12 m-top-40">
                                   
                                  
                                        <div class="business_items text-center">
                                            <div class="business_item">
                                                 
                                              <p class="roomy-20" style="font-size:16px;"><i style="font-size:20px; padding:15px;padding-bottom:40px;" class="text- fa fa-quote-left text-success" ></i>  Adjust your human capital system or organization design in respond to customer, employee, market, or user needs <i style="font-size:20px; padding:15px;" class="text- fa fa-quote-right text-success" ></i></p>
                                               
                                            </div>

                                            <div class="business_item">
                                                <p class="roomy-20" style="font-size:16px;"><i style="font-size:20px; padding:15px;" class="text- fa fa-quote-left text-success" ></i>  No more scattered data or software fatigue. Easily recruit, develop, manage, and retain your people using a single (HCM) System  <i style="font-size:20px; padding:15px;" class="text- fa fa-quote-right text-success" ></i></p>
                                                
                                            </div>

                                            
                                                
                                                
                                           
                                        </div>
                                
                            </div>
                  </div>

                </div>

               </div>
              </div>
            </section>

            <!--Featured Section-->
            <!-- <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                       <img src="assets/images/ser01.png">
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Best Quality Design</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-tablet"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Responsive Design</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-sliders"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Easy to Customize</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!End off row 
                </div> End off container 
            </section> End off Featured Section--> 

            <section id="test" class="test bg-grey roomy-60 fix">
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix">

                            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn delay-05s">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase">Backed by Science</h2>
                                    <h5>Clean and Modern HC design is our best specialist</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix">
                                    <div class="item_img">
                                        <img class="img-circle wow bounceInLeft" src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/orange.png" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text wow rollIn center">
                                        <h5>(Orange, 2016)</h5>
                                        <h6>orangehrm.com</h6>

                                        <p>There is rarely a mention of “agile in the HR group” (HBR, 2014) although one of the core missions of HR in the coming years will likely involve establishing more flexible organizations and forms of employment .</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix sm-m-top-30">
                                    <div class="item_img">
                                        <img class="img-circle wow bounceInRight" src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/forbes.png" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text wow rollIn center">
                                        <h5>(Forbes, 2016)</h5>
                                        <h6>forbes.com</h6>

                                        <p>Well-being encompasses physical wellness, psychological wellness, and social wellness. Highemployee well-being can boost satisfaction, teamwork, productivity, and even improve a company’s bottom-line .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off test section -->






            <section id="empower" class=" bg-black fix">
                  <div class="container">
                    <div class="row">
                     <h3 class="text-white text-uppercase text-center">Empower your <strong>people</strong> and Organization</h3>
                    
                    
                       

                        <div class="col-md-4 col-sm-6 col-xs-12 wowme fadeIn">
                          <div class="service-item text-center">
                             <h2><span id="cost1" class="counter">36 </span><span>%</span></h2>
                            <p>Cost Reduction.</p>
                            
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="service-item text-center">
                             <h2><span id="cost2" class="counter">19 </span><span>%</span></h2>
                            <p>Increace Preformance.</p>
                            
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="service-item text-center">
                             <h2><span id="cost3" class="counter">23 </span><span>%</span></h2>
                            <p>Service team dreacease.</p>
                         
                          </div>
                        </div>
             
                    </div>
                  </div>
            </section>



           <!--  <section id="service" class="features bg-grey">
                <div class="container">
                    <div class="row">
               
                        <div class="main_features fix roomy-40">
                             <div class="col-md-12">
                            <h2 class="text-uppercase">What We Do</h2>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-medical"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Well-being orientation</h3>
                                        <p>Our office policy prioritizing in people well-being. We provide a well-being program such asEvery week is long weekend where <strong>“Friday become Friyay!” </strong>, Flexible working time,or even paid vacationbecause your family need you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-people-14"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Unique Gamified and Fair Appreciation</h3>
                                        <p>We value Dreamaxtioner contribution deeply, that’s why we’re give Dreamaxtioner four times bonusa year–three quarterly and a yearly bonus -based on a fairand transparentgamified experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-adjustments"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>ROLE instead of Job Description</h3>
                                        <p>We  respect  everyone  work  and purpose.  There’s  no  detailed  job  description  or  even micromanaging –because we believe every Dreamaxtioner has their unique role and will do their work earnestly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-bottom-20" >
                                <div class="features_item m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-tablet2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Agile Work Environment</h3>
                                        <p>We’re not only implementgood HC practice;we’re using cutting edgeHRpractice. We’re implementnetwork  organization  basedthree axis–we  called  it Function, Team,  and  Guild.It’s only have four  organization  level –CEO,  Advisor,  Advisor Assistant, and Specialist.Less level means less politic</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </section> -->

  <!-- End off Brand section -->


            <!--Business Section-->
            <section id="business" class="lightbg business roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <div class="col-md-12">
                                <div class="business_item sm-m-top-50">
                                    <h2 class="text-uppercase text-center"><strong>Our</strong> Business Overview</h2>
                                   <!--  <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Higher Purposes </li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Customer & Quality Focuses </li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Team Values </li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Growth Mindset  </li>
                                    <<div class="col-md-12"> -->
                                        <div class="col-md-12 roomy-20">
                                            
                                        <?php  if( !empty($section4) ) {
                                            foreach ($section4 as $key => $value) { ?>
                                            <div class="col-md-4 col-sm-6 col-xs-12" style="border-right:1px solid #ccc;">
                                                <div class="wrap-item text-center">
                                                  <div class="item-img roomy-20">
                                                    <img src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/ser01.png">
                                                  </div>
                                                  <h3 class="pad-bt15"><?php echo $value['caption_title'] ?></h3>
                                                  <p><?php echo $value['caption_item'] ?></p>
                                                </div>
                                            </div>
                                              
                                            <?php } ?>
                                        <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->


<section id="techno" class="brand fix roomy-40 bg-white">
                <div class="container">
                    <div class="row">
                   
                       
                        <div class=" text-center">
                        <h2 class="text-success"> 
                                        <i class="icon icon-technology-11"></i>
                                    Our Technology</h2>

                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="tech_item m-top-10">
                                    <img src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/nodejs_tech.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="tech_item m-top-10">
                                    <img src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/saas_tech.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="tech_item m-top-10">
                                    <img src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/aws_tech.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <div class="tech_item m-top-10">
                                    <img src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/mysql_tech.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <div class="tech_item m-top-10">
                                    <img src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/google_partner.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <div class="tech_item m-top-10">
                                    <img src="http://localhost/dreamx/an-component/media/upload-gambar-pendukung/jquery.png" alt="" />
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>


<!--Business Section-->
            <!-- <section id="reason" class="reason lightbg roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="main_reason">
                  
                            
                            <div class="col-md-12">
                                <div class="reason_item sm-m-top-30">
                                    <h2 class="text-uppercase"><span >8</span> Reasons Why Dreamaxtion Have to be Your Partner</h2>
                                   <!--  <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Higher Purposes </li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Customer & Quality Focuses </li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Team Values </li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Growth Mindset  </li>
                                    </ul> -->
                                    <!--  <ul >
                                        <li><i class="fa fa-check-circle"></i>Adjust your human capital system or organization design in respond to customer, employee, market, or user needs </li>
                                        <li><i class="fa  fa-check-circle"></i>No more scattered data or software fatigue. Easily recruit, develop, manage, and retain your people using a single Human Capital Management (HCM) System </li>
                                        <li><i class="fa  fa-check-circle"></i>Data driven decision making by using predictive analytics to gain insight, predict trends, analyst cost, and behavior patterns.  </li>
                                        <li><i class="fa  fa-check-circle"></i>Using statistic method to find the best person-job fit  </li>
                                        <li><i class="fa fa-check-circle"></i>Adjust your human capital system or organization design in respond to customer, employee, market, or user needs </li>
                                        <li><i class="fa  fa-check-circle"></i>No more scattered data or software fatigue. Easily recruit, develop, manage, and retain your people using a single Human Capital Management (HCM) System </li>
                                        <li><i class="fa  fa-check-circle"></i>Data driven decision making by using predictive analytics to gain insight, predict trends, analyst cost, and behavior patterns.  </li>
                                        <li><i class="fa  fa-check-circle"></i>Using statistic method to find the best person-job fit  </li>
                                    </ul> -->
                                    

                                    
<!-- 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --> <!-- End off Business section -->












            



            <!--Test section-->
           <!--  <section id="test" class="test bg-grey roomy-60 fix">
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase">What Client Say</h2>
                                    <h5>Clean and Modern design is our best specialist</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix">
                                    <div class="item_img">
                                        <img class="img-circle" src="assets/images/test-img1.jpg" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text">
                                        <h5>Sarah Smith</h5>
                                        <h6>envato.com</h6>

                                        <p>Natus voluptatum enim quod necessitatibus quis
                                            expedita harum provident eos obcaecati id culpa
                                            corporis molestias.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix sm-m-top-30">
                                    <div class="item_img">
                                        <img class="img-circle" src="assets/images/test-img2.jpg" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text">
                                        <h5>Sarah Smith</h5>
                                        <h6>envato.com</h6>

                                        <p>Natus voluptatum enim quod necessitatibus quis
                                            expedita harum provident eos obcaecati id culpa
                                            corporis molestias.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --><!-- End off test section -->


            <!--Brand Section-->
            <!-- <section id="brand" class="brand fix roomy-40">
                <div class="container">
                    <div class="row">
                   
                       
                        <div class="main_brand text-center">
                        <h4 class="text-success">Our Client</h4>

                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img1.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img2.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img3.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img4.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img5.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img6.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --><!-- End off Brand section -->

