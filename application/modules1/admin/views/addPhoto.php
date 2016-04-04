<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/2/2016
 * Time: 5:03 PM
 */

?>

<div class="container" style="padding-top:70px; ">

    <div class="row">
        <div class="col-md-4"></div> <?php /*echo base_url();*/?>
        <div class="col-md-4">
            <form role="form" action="<?php echo base_url().'admin/addPhoto/'.$id; ?>" method="post" enctype="multipart/form-data">


                <div class="form-group">
                    <label for="location">Photo :</label>
                    <input type="file" name="photoname[]" class="form-control" id="location" multiple>
                </div>




                <?php /*print_r($post); */?>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div> </div>
</div>
