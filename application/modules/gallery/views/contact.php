<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/4/2016
 * Time: 1:32 PM
 */
?>


<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="active">Contact Us</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-6">
                <div id="page-main">
                    <section id="contact">
                        <header><h1>Contact Us</h1></header>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <p>Ursuline Convent Senior Secondary School <br />Sector-36, RHO-1, Knowledge Park-1<br />Gautam Budh Nagar <br />Greater Noida-201306(U.P)<br />India <br /><strong>Phone: </strong>+(91)-(120)-6457539<br /><br /><strong>Email: </strong>contact@ursulinegreaternoida.org<br /><br /><strong>Website: </strong>www.ursulinegreaternoida.org</p>
                                </address>
                                <div class="icons">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-pinterest"></i></a>
                                    <a href=""><i class="fa fa-youtube-play"></i></a>
                                </div><!-- /.icons -->
                                <hr>
                                <!--  <p>
                                     Morbi rutrum massa eget mi gravida, sit amet mollis magna gravida. Morbi sodales,
                                     ligula quis ornare bibendum, magna erat convallis ipsum, id posuere ligula massa vitae leo.
                                 </p> -->

                            </div>
                        </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.7479431759457!2d77.54273591474507!3d28.457013682487347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cc01734cec9c3%3A0x9619338ad8ffe074!2sUrsline+Convent+Sr+Secondary+School!5e0!3m2!1sen!2sin!4v1454761310538" width="100%" height="350" frameborder="0" style="border:0" ></iframe>
                </div>
            </div>
        </div>
        </section>

        <div class="row">
            <section id="contact-form" class="clearfix">
                <header><h2>Send Us a Message</h2></header>
                <form class="contact-form" id="contactform" method="post" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="controls">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" id="name" required="">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="controls">
                                    <label for="email">Your Email</label>
                                    <input type="email" name="email" id="email" required="">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="controls">
                                    <label for="name">Phone/Mob</label>
                                    <input type="text" name="name" id="name" required="">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="controls">
                                    <label for="email">Address</label>
                                    <input type="email" name="email" id="email" required="">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="controls">
                                    <label for="message">Your Message</label>
                                    <textarea name="message" id="message" required=""></textarea>
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                    <div class="pull-right">
                        <input type="submit" class="btn btn-color-primary" id="submit" value="Send a Message">
                    </div><!-- /.form-actions -->
                    <div id="form-status"></div>
                </form><!-- /.footer-form -->
            </section>
        </div>

    </div><!-- /#page-main -->




    <!-- /.col-md-8 -->

    <!--SIDEBAR Content-->
    <!--  <div class="col-md-4">
         <div id="page-sidebar" class="sidebar">
             <aside class="news-small" id="news-small">
                 <header>
                     <h2>Related News</h2>
                 </header>
                 <div class="section-content">
                     <article>
                         <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                         <header><a href="#">U-M School of Public Health, Detroit partners aim to improve air quality in the city</a></header>
                     </article> --><!-- /article -->
    <!--  <article>
         <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
         <header><a href="#">At 50, Center for the Education of Women celebrates a wider mission</a></header>
     </article> --><!-- /article -->
    <!--  <article>
         <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
         <header><a href="#">Three U-Michigan scientists receive Sloan fellowships</a></header> -->
    <!-- </article> --><!-- /article -->
    <!-- </div> --><!-- /.section-content -->
    <!-- <a href="" class="read-more">All News</a> -->
    <!--  </aside> --><!-- /.news-small -->
    <!-- <aside id="newsletter">
        <header>
            <h2>Newsletter</h2>
            <div class="section-content">
                <div class="newsletter">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your e-mail">
                    <span class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-angle-right"></i></button> -->
    <!-- </span> -->
    <!-- </div> --><!-- /input-group -->
    <!-- </div> --><!-- /.newsletter -->
    <!-- <p class="opacity-50">Ut tincidunt, quam in tincidunt vestibulum, turpis ipsum porttitor nisi, et fermentum augue
        lit eu neque. In at tempor dolor, sit amet dictum lacus. Praesent porta orci eget laoreet ultrices.
    </p> -->
    <!-- </div> --><!-- /.section-content -->
    <!-- </header> -->
    <!-- </aside> --><!-- /.newsletter -->
    <!-- </div> --><!-- /#sidebar -->
    <!-- </div> --><!-- /.col-md-4 -->
</div><!-- /.row -->
<!-- /.container -->

<!-- end Page Content -->

