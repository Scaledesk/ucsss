<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/2/2016
 * Time: 5:56 PM
 */
?>

<div class="container" style="padding-top:70px; ">

    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-9">
        <?php  foreach($photo as $row){ ?>

        <div class="col-md-3  " style="margin-top:10px; "> <a href="<?php  echo base_url().'admin/deletePhoto/'.$row['gallery_photo_id'].'/'.$album_id; ?>">  <i class="fa fa-times"></i> </a>
            <img height="300" width="200" src="<?php  echo base_url().'uploads/'.$row['gallery_photo']; ?>">
         </div>
       

    
      <?php } ?>
        </div>
        </div>
</div>
