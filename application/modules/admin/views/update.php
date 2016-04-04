<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/19/2016
 * Time: 1:46 PM
 */


?>

<div class="container" style="padding-top:70px; ">

    <div class="row">
        <div class="col-md-4"></div> <?php /*echo base_url();*/?>
        <div class="col-md-4">
            <form role="form" action="<?php echo base_url().'admin/update/'.$ablum[0]['album_id']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">	Name:</label>
                    <input type="text" name="name" required class="form-control" id="title" value="<?php echo $ablum[0]['album_name'] ?>">
                </div>

                <div class="form-group">
                    <label for="location">Photo :</label>
                    <input type="file" name="filename" class="form-control" id="location" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>

                     <textarea name="description" rows="6" class="form-control" required ><?php echo $ablum[0]['album_description']; ?></textarea>
                </div>


                    <?php /*print_r($post); */?>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div> </div>
</div>
