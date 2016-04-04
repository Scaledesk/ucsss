<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/19/2016
 * Time: 11:32 AM
 */
?>

<div class="container" style="padding-top:70px; ">

    <div class="row">
        <div class="col-md-4"></div> <?php /*echo base_url();*/?>
        <div class="col-md-4">
            <form role="form" action="<?php echo base_url().'admin/album/'; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">	Name:</label>
                    <input type="text" name="name" required class="form-control" id="title">
                </div>

                <div class="form-group">
                    <label for="location">Photo :</label>
                    <input type="file" name="filename" required class="form-control" id="location">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>

                    <textarea name="description" rows="6" required class="form-control" ></textarea>
                </div>


                <?php /*print_r($post); */?>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div> </div>
</div>