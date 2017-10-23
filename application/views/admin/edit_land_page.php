<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

?>

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Page
            <small><?php echo $title; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $burl; ?>/"><i class="fa fa-dashboard"></i> Halaman Utama</a></li><li class="active"><?php echo $title; ?></li>
           
          </ol>
        </section>

        <section class="content">

          <div class="box box-warning">
            <div class="box-body">
            <div class="form-group">
                <label for="section">Section</label>
                <input type="text" class="form-control" id="section" value="<?php echo $data['label']; ?>" disabled />
              </div>
            

              <div class="form-group">
                <label for="judul_page">Caption Title</label>
                <input type="text" class="form-control" id="judul_page" value="<?php echo $data['caption_title']; ?>" />

                <input type="hidden" id="id_page" value="<?php echo $data['id']; ?>"/>
              </div>

              <div class="form-group">
                <label for="isi_page">Item text</label>
                <textarea class="form-control" id="isi_page"><?php echo $data['caption_item'];?></textarea>
              </div>

          <!--     <div class="form-group">
                <label for="featured_image">Featured Image</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="featured_image" value="<?php echo $data['picture']; ?>" />
                  <span class="input-group-addon btn btn-success btn-foto">Pilih</span>
                </div>
              </div>
 -->
    
              
              
              
              <div class="form-group">
                <label for="status_page">Status</label>
                <select class="form-control" id="status_page">
                  <?php
                  $nilai=array("published","draft");
                  foreach ($nilai as  $value) {
                    $select=$value==$data["status"]?"selected":"";
                    echo "<option value='$value' $select>$value</option>";
                  }
                   ?>
                </select>
              </div>

             

              
              <div class="form-group">
                <button class="btn btn-sm btn-primary" id="save-page">Simpan</button>
              </div>
              
          </div>
        </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->