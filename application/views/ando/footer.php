<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//jika bukan halaman Home
if($informasi["current_page"]!='home'){


echo "<div class='col-md-4 right-wripper'>";

echo "<div class='right-side'>";

echo "<div class='right-side-konten' style='margin-bottom:50px;'>";
echo "<form method='post' action='".baseURL("form_visitors/search_article")."' class='form-group has-feedback'> 

  <input type='text' name='keyword' class='form-control search-form' placeholder='Pencarian artikel...' /><span class='fa fa-search form-control-feedback'></span>

</form>";
echo "</div>";


echo "<div class='right-side-konten'>";
echo "<h4><span>Follow Us</span></h4>";

echo "<a href='https://www.facebook.com/JESUSisMySAVIOR.NotMyReligion' target='_blank' >";
echo "<div class='sosial-button sosial-facebook'>";
echo "</div>";
echo "</a>";

echo "<a href='https://twitter.com/gantengsintetis' target='_blank' >";
echo "<div class='sosial-button sosial-twitter'>";
echo "</div>";
echo "</a>";

echo "<a href='https://www.instagram.com/ando_poluan' target='_blank' >";
echo "<div class='sosial-button sosial-instagram'>";
echo "</div>";
echo "</a>";

echo "<a href='https://plus.google.com/116695949876921825285' target='_blank' >";
echo "<div class='sosial-button sosial-google'>";
echo "</div>";
echo "</a>";

echo "</div>";


echo "<div class='right-side-konten'>";
echo "<h4><span>Artikel Populer</span></h4>";

foreach ($artikel_populer as $artikel) {
  
echo "<a href='".artikel_url($artikel['id'],$artikel['slug'])."'><div class='populer-artikel-right-box media'>";
echo "<div class='img-box media-left'>
 <img src='".img_artikel_url($artikel['foto'],true)."' alt='$artikel[judul]'/>
 </div>";

 echo "<div class='media-body konten-body'>";
 echo "<h5>$artikel[judul]</h5>";
 echo "</div>";

echo "</div></a>";


}

echo "</div>";


echo "<div class='right-side-konten'>";
echo "<h4><span>Tags</span></h4>";

foreach ($tags as $tag) {
  echo "<a href='".tag_url($tag['id'],$tag['slug'])."'><span class='label label-x label-tag'>$tag[nama]</span></a>";
}

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
                                    <p class="m-top-20"><?php echo $biodata['deskripsi_singkat']; ?></p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                <?php echo $biodata['alamat']; ?></p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p><?php echo $biodata['telp']; ?></p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p><?php echo $biodata['email']; ?></p>
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
                                        <li> <a href="<?php echo $biodata['link-fb']; ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo $biodata['link_twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $biodata['link_linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
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


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.3.8/packaged/jquery.noty.packaged.min.js"></script>

        <script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' async defer></script>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.1.0/jssocials.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/prism.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/components/prism-php.min.js"></script>

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


  $("#kontak-form").on("submit",function(evt){
    evt.preventDefault();    
    if(!$(this)[0].mengirim) {
    __this=$(this)      
    __this[0].mengirim=true;
    var val=__this.serialize();
    var action=__this.attr("action");
    __this.find("button").hide();
    __this.find(".cssload-container").show();
    $.ajax({
      type:"POST",
      url:action,
      data:val,
      cache:false,
      dataType:'json',
      success:function(a){
        if(a.status=='sukses'){
           noty({
            text:"Pesan anda terkirim. Terima kasih telah mengubungi kami",
            type: 'success',
            layout: 'center',            
            dismissQueue:true
                        });
         $('form#kontak-form').find("input[type=text],input[type=password], textarea").val("");
        } else if(a.status=='error') {
          noty({
            text:a.name,
            type: 'error',
            layout: 'center',
            dismissQueue:true

          });
        }

      },
      error:function(){
          noty({
            text:"Cek koneksi internet anda",
            type: 'error',
            layout: 'center',
            dismissQueue:true

          });
      },
      complete:function(){
        grecaptcha.reset(contact_us);  
        __this.find("button").show();
        __this.find(".cssload-container").hide();
        __this[0].mengirim=false;      
      }
    });
  }
  });

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