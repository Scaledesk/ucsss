<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/5/2016
 * Time: 12:03 PM
 */
?>
<html>
<head>
    <title>Codelgniter pagination</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
    <div id="content">
        <h3 id='form_head'>Codelgniter Pagination Example </h3><br/>
        <hr>
        <div id="form_input">
            <?php

            // Show data
            foreach ($results as $data) {
                echo  $data->album_id
                    .  $data->album_name
                    .   $data->album_photo
                    .  $data->album_description ;
                echo "<br>";
            }
            ?>
        </div>
        <div id="pagination">
            <ul class="tsc_pagination">

                <!-- Show pagination links -->
                <?php foreach ($links as $link) {
                    echo "<li>". $link."</li>";
                } ?>
        </div>
    </div>
</div>
</body>
</html>
