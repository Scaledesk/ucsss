

  <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/css/jquery.dataTables.min.css"/>

<script type="text/javascript" src="<?php echo asset_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>

  <script> 
 $(document).ready(function() {
    $('.display').DataTable();
} );
  </script>
        <section id="main-content">
          <section class="wrapper">

        
  <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th>Ablum Id</th>
                 <th> Name</th>
                <th> Photo</th>
                <th> Description</th>
                <th> Action</th>

            </tr>
        </thead>
       <!--  <tfoot>
            <tr>
                <th>Service</th>
                <th>Grade</th>
                <th>Length</th>
                <th>Delivery Date</th>
                <th>Date</th>
                <th>Total Price</th>
            </tr>
        </tfoot> -->
     `
        <tbody><?php foreach ($album as  $row) {
        ?>
            <tr>
               <td><a href="<?php echo base_url().'admin/albumPhoto/'.$row['album_id']; ?>"><?php echo $row['album_id']; ?></a></td>
                <td><a href="<?php echo base_url().'admin/albumPhoto/'.$row['album_id']; ?>"><?php echo $row['album_name']; ?></a></td>


                <td><img height="50" width="50" src="<?php echo base_url()."uploads/".$row['album_photo']; ?>"></td>
                <td> <?php echo $row['album_description']; ?></td>

                <td> <a onclick="return confirm('Are you sure you want to update Album ?')" href="<?php echo base_url().'admin/update/'.$row['album_id']; ?>">Update</a>
                    /<a onclick="return confirm(' Are you sure you want to add Photo in this Album ?')" href="<?php echo base_url().'admin/addPhoto/'.$row['album_id']?>">Add Photo </a>
                     /<a onclick="return confirm(' Are you sure you want to Delete Album ?')" href="<?php echo base_url().'admin/delete/'.$row['album_id']?>">Delete </a></td>


            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
</section></section>