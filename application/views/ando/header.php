<?php
defined('BASEPATH') OR exit('Eiits! Jangan coba coba Mblo!!!!');
?>
<!DOCTYPE html>
<html lang="id-ID" prefix="og: http://ogp.me/ns#">
<head>
	<title><?php echo $informasi["title"] ?></title>

     <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="<?php echo $informasi['meta_deskripsi']; ?>" />
     <meta name="keywords" content="<?php echo $informasi['meta_keyword']; ?>" />
     <meta name="author" content="<?php echo $informasi['author']; ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <meta property="og:url" content="<?php echo $informasi['og-url'];  ?>" />
     <meta property="og:title" content="<?php echo $informasi['og-title']; ?>" />
     <meta property="og:description" content="<?php echo $informasi["og-description"]; ?>" />
     <meta property="og:site_name" content="<?php echo $informasi['og-site_name']; ?>" />
     <meta property="og:image" content="<?php echo $informasi['og-image']; ?>" />
     <meta property="og:image:type" content="image/jpeg" />
     <meta property="og:type" content="<?php echo $informasi['og-type']; ?>" />
<?php if($informasi["current_page"]=="detail-artikel"){ ?>
     <meta property="article:author" content="<?php echo $informasi['article-author']; ?>" />
     <meta property="article:publisher" content="<?php echo $informasi['article-publisher']; ?>" />
     <meta property="article:published_time" content="<?php echo $informasi['article-published_time']; ?>" />
<?php } ?>


	<link rel='shortcut icon' href='<?php echo $informasi['favicon'] ?>' />	
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css' />

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo assets_url('css/slick/slick.css') ?>"> 
  <link rel="stylesheet" href="<?php echo assets_url('css/slick/slick-theme.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/animate.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/iconfont.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/bootstrap.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/magnific-popup.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/bootsnav.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo assets_url('css/responsive.css') ?>">



   <script src="<?php echo assets_url('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>



	<style type="text/css">
		<?php echo $informasi["custom_css"]; ?>
    .my_images img {width: 20px; height:20px}
	</style>


	



</head>

<?php

class menu_apricot {

    public $CI;

    public $menu;

    function __construct(){
        $this->CI =& get_instance();
    }


    // fungsi untuk mengambil menu
    function ambil_menu($type_menu,$parent=0){

        $kondisi=array(

            "menu_id"=>$type_menu,
            "menu_child_parent" => $parent,
            "aktif" => "Y"

            );
        //query ke database
        $this->CI->db->order_by("posisi","ASC");
        $query= $this->CI->db->get_where("menu_child",$kondisi);

        //cek apakah memiliki hasil
        if($query->num_rows()>0){
            $class=$parent==0?"nav navbar-nav navbar-right":"dropdown-menu";
            $this->menu.="<ul class='$class'>";
            
            foreach ($query->result_array() as $menu) {
                //cek apakah menu sekarang mempunyai submenu atau tidak
                $cek=$this->CI->db->get_where('menu_child',array('menu_child_parent'=>$menu['menu_child_id'],'aktif'=>'Y','menu_id'=>$type_menu));

                //jika terdapat sub menu
                if($cek->num_rows()>0){

                    $this->menu.= "<li class='dropdown'><a href='$menu[menu_child_url]' target='$menu[menu_child_target]'  class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$menu[menu_child_nama] </a>";
                    //panggil ambil_menu() secara reqursive untuk mengambil sub-menu nya
                    $this->ambil_menu($type_menu,$menu['menu_child_id']);
                    $this->menu.= "</li>";

                }
                //jika tidak memiliki sub menu
                 else {
                    $this->menu.= "<li><a href='$menu[menu_child_url]' target='$menu[menu_child_target]'>$menu[menu_child_nama]</a>";
                    $this->menu.= "</li>";
                }

            }

            $this->menu.="</ul>";

        } else {
            //jika tidak ada hasil.
            return;

        }

    }


}

$menuPertama = new menu_apricot;
$menuPertama->ambil_menu(1); //angka 1 adalah ID menu horizontal 

?>
<body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <!-- <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: 1234 5678 90</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: your@email.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                           
                            <img src="<?php echo $informasi["logo"]; ?>" class="my_images" style="width:160px; height:46px;" alt="" >
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse menux" id="navbar-menu">
                   <!--      <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>                    
                            <li><a href="#features">About</a></li>
                            <li><a href="#business">Service</a></li>
                            <li><a href="#work">Portfolio</a></li>
                            <li><a href="#test">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul> -->
                        <?php echo $menuPertama->menu;  ?>
                        



                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>
        <!--
        End Fixed Navigation
        ==================================== -->


<main class="site-content" role="main">

<?php

//jika bukan halaman Home
if($informasi["current_page"]!='home'){

  // echo "<div class='section' id='main-konten'>";
  // echo "<div class='container'>";
  // echo "<div class='row'>";
}

?>