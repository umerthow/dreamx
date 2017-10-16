<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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

		<div class="artikel">

			<?php if($page["foto"]!=""){
				echo "<img class='img-responsive' alt='$page[judul]' src='$page[foto]' />";
			} 
			?>

			
		 <div class='konten'>
			<div class="isi">
				<?php echo $page['isi']; ?>
			</div>

		 </div>
		</div>

	</div>