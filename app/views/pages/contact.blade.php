@extends('layouts.fullwith')
@section('content')
  <div class="col-md-12">
                 <div class="shadow-box">
                    <!-- <div class="pageobject" data-top="-198px" data-left="150px" data-zindex="1000">
                         <img src="./assets/images/content/kid2.png" alt="">
                     </div>-->
                     <h4 class="color-motive uppercase pull-left">Therapies4Kids</h4>
                     @include('includes.socialBar')
                     <div class="clearfix"></div>
                     <hr>
                     <h3 class="color-motive">Contact Us Today! </h3>

                         
                                   
           <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tablayout" data-toggle="tab">Pembroke Pines - Florida</a></li>
                    <li><a href="#claritas" data-toggle="tab">Plantation - Florida </a></li>
                    <li><a href="#investigationes" data-toggle="tab">Coral Springs - Florida</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="tablayout">
                        <div class="row">
                                       <div class="col-sm-9">
                                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14640.179848993306!2d-46.6154317!3d-23.4588426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef6f3a58c0461%3A0x1f76ed9dbc4ee12f!2sAv.+Nova+Cantareira%2C+4775+-+Jardim+Virg%C3%ADnia+Bianca%2C+S%C3%A3o+Paulo+-+SP%2C+Brazil!5e0!3m2!1sen!2sus!4v1413856536778" width="750" height="300" frameborder="0" style="border:0"></iframe>
                                       </div>
                                       <div class="col-sm-3">
                                           <p>
                                               Av. Nova Cantareira, 4775 <br>
                                               Jardim Virgínia Bianca<br>
                                               São Paulo - SP<br>
                                               Brasil<br>
                                               CEP: 02340-002
                                           </p>
                                           <span class="h4 color-motive"><a href="https://www.google.com/maps/place/Av.+Nova+Cantareira,+4775+-+Jardim+Virg%C3%ADnia+Bianca,+S%C3%A3o+Paulo+-+SP,+Brazil/@-23.4588426,-46.6154317,15z/data=!4m2!3m1!1s0x94cef6f3a58c0461:0x1f76ed9dbc4ee12f">Navegar</a></span>
                                           <br>
                                           <br>
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="h4 color-motive">
                                                       <i class="fa fa-phone"></i>
                                                   </span>
                                               </div>
                                               <div class="media-body">
                                                   <span class="h4 color-motive">
                                                       555 987-6984
                                                   </span>
                                               </div>
                                           </div>
                                           <br>
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="h4 color-motive">
                                                       <i class="fa fa-phone"></i>
                                                   </span>
                                               </div>
                                               <div class="media-body">
                                                   <span class="h4 color-motive">
                                                       555 987-6984
                                                   </span>
                                               </div>
                                           </div>
                                           <br>
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="h4 color-motive">
                                                       @
                                                   </span>
                                               </div>
                                               <div class="media-body">
                                                   <span class="h4 color-motive">
                                                       <a href="mailto:leo@therapies4kids.com">leo@therapies4kids.com</a>
                                                   </span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                    
                    </div>
                    <div class="tab-pane" id="claritas"><h4>One column text and title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="tab-pane" id="investigationes"><h4>One column text and title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolorat volutpat. Ut wisi enim ad minim veniam.</p>
                    </div>
                </div>
                               <p><p/>   
                                    <form role="form" action="./assets/form/send.php" method="post" class="contactForm validateIt"
                              data-email-subject="Contact Form" data-show-errors="true">
                            <div class="row padding-xs-top">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required type="text" name="field[]" class="form-control"
                                               placeholder="First name">
                                    </div>
                                    <div class="form-group">
                                        <input required type="text" name="field[]" class="form-control"
                                               placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required type="email" name="field[]" class="form-control"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input required type="tel" name="field[]" class="form-control"
                                               placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea required class="form-control" rows="5" name="field[]" placeholder="Email"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary uppercase witharrow">Submit Request</button>
                                </div>
                            </div>
                        </form>

 
                 </div>
             </div>
@stop