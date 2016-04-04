<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/3/2016
 * Time: 1:38 PM
 */
?>


<!-- Page Content -->
<div id="page-content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 custom_height">
                <h1>Gallery</h1>
            </div>
            <div class="col-md-12">
                <!--   <div class="col-md-2">
                <a href="assets/img/HRD2016_119.jpg" class="image-popup"><img src="assets/img/HRD2016_119.jpg" alt="" width=200></a>
            </div>

            <div class="col-md-2">
                <a href="assets/img/HRD2016_119.jpg" class="image-popup"><img src="assets/img/HRD2016_119.jpg" alt=""width=200></a>
            </div>

            <div class="col-md-2">
                <a href="assets/img/HRD2016_118.jpg" class="image-popup"><img src="assets/img/HRD2016_118.jpg" alt=""width=200></a>
            </div>

            <div class="col-md-2">
                <a href="assets/img/HRD2016_117.jpg" class="image-popup"><img src="assets/img/HRD2016_117.jpg" alt=""width=200></a>
            </div>

            <div class="col-md-2">
                <a href="assets/img/HRD2016_116.jpg" class="image-popup"><img src="assets/img/HRD2016_116.jpg" alt=""width=200></a>
            </div>

            <div class="col-md-2">
                <a href="assets/img/HRD2016_115.jpg" class="image-popup"><img src="assets/img/HRD2016_115.jpg" alt=""width=200></a>
            </div>

 -->

                <div class="col-md-12" style="margin: 20px 0; padding-left: 0;">

                    <ul class="gallery-list">
                        <?php foreach ($photo as $row){ ?>
                        <li><a href="<?php echo base_url().'uploads/'.$row['gallery_photo'] ?>" class="image-popup"><img src="<?php echo base_url().'uploads/'.$row['gallery_photo'] ?>" alt=""></a></li>
                        <?php }?>
                       <!-- <li><a href="assets/img/HRD2016_119.jpg" class="image-popup"><img src="assets/img/HRD2016_119.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_118.jpg" class="image-popup"><img src="assets/img/HRD2016_118.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_117.jpg" class="image-popup"><img src="assets/img/HRD2016_117.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_116.jpg" class="image-popup"><img src="assets/img/HRD2016_116.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_115.jpg" class="image-popup"><img src="assets/img/HRD2016_115.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_114.jpg" class="image-popup"><img src="assets/img/HRD2016_114.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_113.jpg" class="image-popup"><img src="assets/img/HRD2016_113.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_112.jpg" class="image-popup"><img src="assets/img/HRD2016_112.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_110.jpg" class="image-popup"><img src="assets/img/HRD2016_110.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_109.jpg" class="image-popup"><img src="assets/img/HRD2016_109.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_108.jpg" class="image-popup"><img src="assets/img/HRD2016_108.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_107.jpg" class="image-popup"><img src="assets/img/HRD2016_107.jpg" alt=""></a></li>
                        <li><a href="assets/img/HRD2016_106.jpg" class="image-popup"><img src="assets/img/HRD2016_106.jpg" alt=""></a></li>-->
                    </ul>
                    <!--  <a href="" class="read-more">Go to Gallery</a> -->
                </div>

                <nav>
                    <ul class="pagination custom_style_pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>

                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div> <!--end of row-->

            <!--  <div class="col-md-4 col-sm-4">
                 <section id="academic-life">
                     <header>
                         <h2>Academic Life & Research</h2>
                     </header>
                     <div class="section-content">
                         <ul class="list-links">
                             <li><a href="#">Programs and Areas</a></li>
                             <li><a href="#">Research</a></li>
                             <li><a href="#">Graduate & Postdoctoral Programs</a></li>
                             <li><a href="#">Continuing Studies</a></li>
                             <li><a href="#">International Activities</a></li>
                             <li><a href="#">Course Calendars & Listings</a></li>
                         </ul> -->
            <!--  </div><!-- /.section-content -->
            <!-- </section> --> <!-- /.academic-life -->
            <!--  </div> --><!-- /.col-md-4 -->

            <!-- <div class="col-md-4 col-sm-4">
                <section id="campus-life">
                    <header>
                        <h2>Campus Life</h2>
                    </header>
                    <div class="section-content">
                        <ul class="list-links">
                            <li><a href="#">Athletics & Recreation</a></li>
                            <li><a href="#">Clubs & Extra-curricular Activities</a></li>
                            <li><a href="#">Health & Wellness</a></li>
                            <li><a href="#">Housing & Residence</a></li>
                            <li><a href="#">Arts & Culture</a></li>
                            <li><a href="#">Student IT Services</a></li>
                        </ul> -->
            <!--  </div> --><!-- /.section-content -->
            <!--  </section> --><!-- /.campus-life -->
            <!-- </div> --><!-- /.col-md-4 -->

            <!-- <div class="col-md-4 col-sm-4">
                <section id="newsletter">
                    <header>
                        <h2>Newsletter</h2>
                        <div class="section-content">
                            <div class="newsletter">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-angle-right"></i></button>
                                    </span> -->
            <!-- </div> --><!-- /input-group -->
            <!--  </div> --><!-- /.newsletter -->
            <!-- <p class="opacity-50">
                Enter Your Email to Subscribe
            </p> -->
            <!-- </div> --><!-- /.section-content -->
            <!-- </header> -->
            <!--  </section> --><!-- /.newsletter -->
            <!-- </div> --><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
