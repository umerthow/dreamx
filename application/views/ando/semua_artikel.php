<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div>
</div>


</section>

	
			<section class="well well-sm">
          	<div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><?php echo $heading; ?></p>
                    </div>
                    
                </div>
           	</div>
        </section>

<div class="container">
<div class="row">

<div class='col-md-8 left-side'>
<div class='artikel'>
<div class='konten'>

<?php foreach ($semua_artikel as $key => $artikel) {

echo "<div class='body-konten'>";








echo "<a href='".artikel_url($artikel['id'],$artikel['slug'])."'><h3 class='judul'>$artikel[judul]</h3></a>";
echo "<p class='article-data' style='font-size:14px;'>$artikel[nama_kategori] | ".format_tanggal($artikel['tanggal'])." | Dibaca $artikel[dibaca] kali </p>";
//echo "<span class='tanggal'> <i class='fa fa-calendar'></i>&nbsp; ".format_tanggal($artikel['tanggal'])."</span> <span class='author'> <i class='fa fa-user'></i>&nbsp; $artikel[nama_admin]</span> <span class='dibaca'> <i class='fa fa-eye'></i>&nbsp; Dibaca $artikel[dibaca] kali </span>";
 
echo "</div>";


echo "<div class='info'>";




echo "</div>";


} ?>
</div>
</div>


<section id="blog">
<div class="pagination-wrapper col-md-12 clearfix">
      <div style='width:100%;text-align: center'>
        <?php echo $pagination; ?>

      </div>
</div>
	</section>




</div>
