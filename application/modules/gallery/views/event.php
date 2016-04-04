<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/4/2016
 * Time: 1:14 PM
 */
?>


<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="event.html">Events</a></li>
        <li class="active">Calendar</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section class="event-calendar">
                        <header><h1>Events Calendar</h1></header>
                        <section id="event-calendar">
                            <div class="calendar"></div>
                        </section>
                    </section><!-- /.event-calendar -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Upcoming Events</h2>
                        </header>
                        <div class="section-content">
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>13 Feb 2016</figure>
                                <header><a href="">L.A. Closing & Annual Prize Distribution Day(Cultural Committee)</a></header>
                            </article><!-- /article -->
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>17 Feb 2016</figure>
                                <header><a href="">U.M.I. Foundation Day-Class VIII</a></header>
                            </article><!-- /article -->
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>01 March 2016</figure>
                                <header><a href="">Summative Assessment-II</a></header>
                            </article><!-- /article -->
                        </div><!-- /.section-content -->
                        <a href="" class="read-more">All Events</a>
                    </aside><!-- /.news-small -->
                    <aside id="archive">
                        <header>
                            <h2>Archive</h2>
                            <ul class="list-links">
                                <li><a href="#february" data-toggle="modal">February 2016</a></li>
                                <li><a href="#january" data-toggle="modal">January 2016</a></li>
                                <li><a href="#december" data-toggle="modal">December 2015</a></li>
                                <li><a href="#november" data-toggle="modal">November 2015</a></li>
                                <li><a href="#october" data-toggle="modal">October 2015</a></li>
                                <li><a href="#september" data-toggle="modal">September 2015</a></li>
                                <li><a href="#august" data-toggle="modal">August 2015</a></li>
                                <li><a href="#july" data-toggle="modal">July 2015</a></li>
                                <li><a href="#june" data-toggle="modal">June 2015</a></li>
                                <li><a href="#may" data-toggle="modal">May 2015</a></li>
                                <li><a href="#april" data-toggle="modal">April 2015</a></li>

                            </ul>
                        </header>
                    </aside>
                </div> <!--#sidebar-->
            </div><!-- /.col-md-4 -->
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
