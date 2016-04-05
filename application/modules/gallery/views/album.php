

    <!-- Page Content -->
    <div id="page-content">

        <div class="container">
            <div class="row">
                <div class="col-md-12 custom_height">
                    <h1>Gallery</h1>
                </div>
                <div class="col-md-12 custom_height">
                <div class="gallery_section">

                  <!--  <?php /* foreach($album as $row){ */?>
                    <div class="col-md-4 ">
                        <div class="grid">
                            <figure class="effect-steve">
                                <img src="<?php /*echo base_url()."uploads/".$row['album_photo']; */?>" alt="img29"/>
                                <figcaption>
                                    <h3><?php /*echo $row['album_name']; */?></span></h3>
                                    <p><?php /*echo $row['album_description']; */?></p>
                                    <a href="<?php /* echo base_url().'gallery/albumPhoto/'.$row['album_id']; */?>">View more</a>
                                </figcaption>
                            </figure>

                        </div>

                    </div>
                    --><?php /*}*/?>
                    <?php  foreach($results as $row){ ?>
                        <div class="col-md-4 ">
                            <div class="grid">
                                <figure class="effect-steve">
                                    <img src="<?php echo base_url()."uploads/".$row->album_photo; ?>" alt="img29"/>
                                    <figcaption>
                                        <h3><?php echo $row->album_name; ?></span></h3>
                                        <p><?php echo $row->album_description; ?></p>
                                        <a href="<?php  echo base_url().'gallery/albumPhoto1/'.$row->album_id; ?>">View more</a>
                                    </figcaption>
                                </figure>

                            </div>

                        </div>
                    <?php }?>
<!--
                    <div class="col-md-4 ">
                        <div class="grid">
                            <figure class="effect-steve">
                                <img src="assets/img/New Gallery/1.jpg" alt="img29"/>
                                <figcaption>
                                    <h3>Morning Assembly by  <span>UKG-C  </span></h3>
                                    <p>11th Feb, 2016 </p>
                                    <a href="gallery_2.html">View more</a>
                                </figcaption>
                            </figure>

                        </div>

                    </div>


                    <div class="col-md-4 ">
                        <div class="grid">
                            <figure class="effect-steve">
                                <img src="assets/img/New Gallery/farewell_1.jpg" alt="img29"/>
                                <figcaption>
                                    <h3> Farewell for    <span>class XII - 2016</span></h3>
                                    <p> 9th Feb, 2016 </p>
                                    <a href="gallery_3.html">View more</a>
                                </figcaption>
                            </figure>

                        </div>

                    </div>-->


                </div> </div>

                <ul class="pagination custom_style_pagination">

                     <?php foreach ($links as $link) {
                            echo "<li>". $link."</li>";
                        } ?>

                    <!--<li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="Gallery1.html">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>

                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>-->
                </ul>
                <!--

                                <div class="gallery_section">
                                    <div class="col-md-4 ">
                                        <div class="grid">
                                            <figure class="effect-steve">
                                                <img src="assets/img/New Gallery/SAUKGB_101.jpg" alt="img29"/>
                                                <figcaption>
                                                    <h3>Special Assembly by <span>UKG-B</span></h3>
                                                    <p>30th Jan, 2016</p>
                                                    <a href="gallery_4.html">View more</a>
                                                </figcaption>
                                            </figure>

                                        </div>

                                        </div>

                                        <div class="col-md-4 ">
                                        <div class="grid">
                                            <figure class="effect-steve">
                                                <img src="assets/img/New Gallery/FETE2015_111.jpg" alt="img29"/>
                                                <figcaption>
                                                    <h3>Fete 2015 </h3>
                                                    <p>22nd Dec, 2015 </p>
                                                    <a href="gallery_5.html">View more</a>
                                                </figcaption>
                                            </figure>

                                        </div>

                                        </div>


                                        <div class="col-md-4 ">
                                        <div class="grid">
                                            <figure class="effect-steve">
                                                <img src="assets/img/New Gallery/CCP2015_183.jpg" alt="img29"/>
                                                <figcaption>
                                                    <h3> Christmas Celebration <span>2015 </span></h3>
                                                    <p> 21st Dec, 2015 </p>
                                                    <a href="gallery_6.html">View more</a>
                                                </figcaption>
                                            </figure>

                                        </div>

                                        </div>

                                        </div>
                -->


                <div class="clear"></div>


            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>




