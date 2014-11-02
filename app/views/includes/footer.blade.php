<?php
/**
 * Created by PhpStorm.
 * User: carolokausp
 * Date: 10/3/2014
 * Time: 4:58 PM
 */ ?>


<div class="footer-images">
    <div id="rainbow" class="animated" data-fx="bounceInLeft">
        <img src="./assets/images/rainbow.png" alt="rainbow image">
    </div>
    <div id="wave3"></div>
    <div id="island" class="animated" data-fx="fadeInUp">
        <img src="./assets/images/island.png" alt="island image">
    </div>
    <div id="wave2"></div>
    <div id="boat" class="animated" data-fx="fadeInUp">
        <img src="./assets/images/boat.png" alt="boat image">
    </div>
    <div id="wave1"></div>
</div>

<footer class="type1">
    <div id="fish1"></div>
    <div id="fish2"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4>Contact us</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contacts">
                            569 Main Street<br>
                            NY 21698 - Our town<br>
                            Canada
                            <span class="contacts-map">
                                <a target="_blank" href="https://www.google.pt/maps/place/Nova+Iorque/@40.7056308,-73.9780035,11z/data=!4m2!3m1!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62"><i class="fa fa-map-marker"></i><br>MAP</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contacts">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    + 1 555 312 655
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    + 1 555 231 755
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    @
                                </div>
                                <div class="media-body">
                                    <a href="mailto:bartek@createit.pl">abc@mail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <h4>Schedule a Visit</h4>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="successMessage alert alert-success" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p>Thank You! We will contact you shortly.</p>
                        </div>
                        <div class="errorMessage alert alert-danger" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p>Ups! An error occured. Please try again later.</p>
                        </div>
                    </div>
                </div>

                <form role="form" action="./assets/form/send.php" method="post" class="contactForm validateIt"
                      data-email-subject="Contact Form" data-show-errors="true">
                    <div class="row padding-xs-top">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <input required type="text" name="field[]" class="form-control"
                                       placeholder="First name">
                            </div>
                            <div class="form-group">
                                <input required type="text" name="field[]" class="form-control"
                                       placeholder="Last name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 contact-mid-col">
                            <div class="form-group">
                                <input required type="email" name="field[]" class="form-control"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input required type="tel" name="field[]" class="form-control"
                                       placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="input-group date">
                                <input type="text" class="form-control" placeholder="Date & Time"><span class="input-group-addon"><i class="fa fa-chevron-down"></i></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block uppercase witharrow">Submit Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 copyright">
                © Copyright 2014 - <a href="http://outsourcing.createit.pl/">createIT</a>
            </div>
        </div>
    </div>
</footer>