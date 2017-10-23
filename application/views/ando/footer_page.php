<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//jika bukan halaman Home
if($informasi["current_page"]!='home'){



echo "</div>";

echo "<div class='right-side-konten'>";
echo "</div>";

echo "</div>"; //.right-side

echo "</div>"; //.col-md-4



  echo "</div>"; //tutup class .row
  echo "</div>"; //tutup class .container
  echo "</div>"; //tutup id #main-konten
  echo "</div>"; //tutup id #main-konten

}

?>


            <footer id="contact" class="footer action-lage bg-foot p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h3 class="text-white">About Us</h3>
                                    <p class="m-top-20">Dreamaxtion is a Technology Solution's company focusing on Human Capital Solutions especially HR Information System to improve company-employee well-being and engagement. .</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                Jl. Kelapa Hibrida Raya Blok QG 10 No.9 (Piggabo's Store ,2nd Floor),
                                                Jakarta Utara - 14250</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>(021) 123456</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>youremail@mail.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3 hidden-xs visible-md-block visible-lg-block">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h3 class="text-white">Latest News</h3>







                          <?php foreach ($artikel_headline as  $value) { ?>

                                    <div class="widget_latst_item m-top-30" >
                                        <div class="item_icon"><img src="<?php echo img_artikel_url($value['foto'],true) ?>" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <a href="<?php echo artikel_url($value['id'],$value['slug']) ?>"><p><?php echo $value['judul'] ?></p></a>
                                            <a href=""><?php echo format_tanggal($value['tanggal']) ?></a>
                                        </div>
                                    </div>
                        <?php } ?>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <!-- <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">Category</h5>
                                    <ul class="m-top-20">
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> User Interface Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> E- Commerce</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> HRIS</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Support Forums</a></li>
                                    </ul>
                                </div><!-- End off widget item 
                            </div><!-- End off col-md-3 -->

                                <div class="col-md-3 col-md-offset-3 hidden-xs visible-md-block visible-lg-block" id="logo_footer" >
                                    <img src="<?php echo assets_url('images/Dreamaxtion-Logo.png')?>" style="height:81px;width:206px;margin-left:-13px;margin-bottom:-20px;" class="logo img-responsive" alt="">
                                     <p>One system across to HC cycle</p>
                                     <ul class="list-inline m-top-20">
                                        <li> <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                    <!-- <div class="m-top-30">
                                        <img src="<?php echo assets_url('images/Dreamaxtion-Logo.png')?>" style="height:81px;width:206px;margin-bottom:-20px;" class="logo img-responsive" alt="">
                                        <p>One system across to HC cycle</p>
                                    </div> -->
                                    

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                                    <ul class="list-inline m-top-20 visible-xs hidden-md-block hidden-lg-block">
                                        <li> <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                        </div>

                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                    <!--     <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with 
                            <i class="fa fa-heart"></i>
                            by 
                            <a target="_blank" href="https://bootstrapthemes.co">Bootstrap Themes</a> 
                            2016. All Rights Reserved
                        </p> -->
                         <p class="text-center">Copyright © <span style="color:#fff"><strong>Dreamaxtion</strong></span> -  building Indonesia trough human capital good practice and people empowerment 2017 | <a href="#"><span style="color:#ffffff">Privacy Policy</a></span> </p>  <!-- <p class="text-center"> <a href="mailto:ahmad.umar.bbm@gmail.com"><span style="color:#8bcad5">Developed by : Ahmad Umar</a></span></p>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->












 <!-- JS includes -->
        <script src="<?php echo assets_url('js/vendor/jquery-1.11.2.min.js'); ?>"></script>
        <script src="<?php echo assets_url('js/vendor/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo assets_url('js/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo assets_url('js/jquery.magnific-popup.js'); ?>"></script>
        <script src="<?php echo assets_url('js/jquery.easing.1.3.js'); ?>"></script>
        <script src="<?php echo assets_url('css/slick/slick.js'); ?>"></script>
        <script src="<?php echo assets_url('css/slick/slick.min.js'); ?>"></script>
        <script src="<?php echo assets_url('js/jquery.collapse.js'); ?>"></script>
        <script src="<?php echo assets_url('js/bootsnav.js'); ?>"></script>
        <script src="<?php echo assets_url('js/plugins.js'); ?>"></script>
        <script src="<?php echo assets_url('js/main.js'); ?>"></script>



</body>




    
<script type="text/javascript">

$(function(){

  var contact_us;


  onloadCallback=function(){

  contact_us=grecaptcha.render(document.getElementById('recaptcha1'), {
          'sitekey' : "<?php echo $recaptcha['key'] ?>",
          'theme' : 'dark'
        });


  }




});

</script>

<script>
$('.codegen').click(function(){

   $(".overlay").fadeToggle(200);
       $(this).toggleClass('btn-open').toggleClass('btn-close');
});

$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);   
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});
</script>
</html>