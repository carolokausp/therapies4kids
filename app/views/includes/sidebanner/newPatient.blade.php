<?php
/**
 * Created by PhpStorm.
 * User: carolokausp
 * Date: 10/5/2014
 * Time: 5:59 PM
 */ ?>
<div class="col-sm-6 col-md-12">
    <div class="shadow-box daycare-widget">
        <h4 class="color-motive uppercase">New Patient inquiry</h4>
            <form role="form" action="./assets/form/send.php" method="post" class="contactForm validateIt"
                  data-email-subject="Contact Form" data-show-errors="true">
                <div class="row padding-xs-top">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input required type="text" name="field[]" class="form-control"
                                   placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input required type="tel" name="field[]" class="form-control"
                                   placeholder="Phone">
                        </div>
                    </div>
                        <div class="col-sm-12">
                        <div class="form-group">
                            <textarea required class="form-control" rows="5" name="field[]" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary uppercase witharrow">Submit Request</button>
                    </div>
                    <!--<div class="col-md-4 col-sm-4 contact-mid-col">
                        <div class="form-group">
                            <input required type="email" name="field[]" class="form-control"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input required type="tel" name="field[]" class="form-control"
                                   placeholder="Phone">
                        </div>
                    </div>-->


                </div>
            </form>


    </div>
</div>