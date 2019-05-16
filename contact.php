
<section class="page-title-area">
    <div class="container">       
            <?php $this->load->view('layout/message'); ?>       
    </div>
</section>
<section class="page-title-area">

    <div class="headertext"style="background-color:#21618C">
    <div class="container"><span style="color:white">Contact Us</span></div>
</div>
 
</section>

<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                
                <section class="section-paddings">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.499046734415!2d77.3138693148381!3d28.584801982436606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce458c5170c81%3A0x931a76bc3bfae16a!2sDesire+IT+Solutions+Pvt+Ltd.!5e0!3m2!1sen!2sin!4v1523822882952" width="100%;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </section>
                <!-- <script>
                    function myMap() {
                        var myCenter = new google.maps.LatLng(
                        var mapCanvas = document.getElementById("map");
                        var mapOptions = {center: myCenter, zoom: 16};
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                        var marker = new google.maps.Marker({position: myCenter});
                        marker.setMap(map);
                        //infowindow.open(map, marker);
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwNfbMeqVjiM6GstU-IfuyXvg0R1F2UaY&callback=myMap"></script>
            </div> -->
        </div>
    </div>
</section>



<section class="message_now_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Message Title -->
                    <div class="message_title">
                        <h3>Send us a message now!</h3>
                    </div>
                </div>
            </div>
            <!-- .end row -->
            <div class="row">
                <div class="col-xs-12">
                    <form id="main_contact_form">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name *">
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your E-mail *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="number" name="number" class="form-control" id="number" placeholder="Your Number *" required>
                                    </div>
                                </div>

                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-default" id="submit_contact">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>
            <!-- .end row -->
        </div>
        <!-- .end container -->
    </section>

<!-- <section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="contact-form">
                    <form action="<?php echo site_url('contact'); ?>" method="post" name="contact" id="contact">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name" class="col-form-label"><?php echo $this->lang->line('first_name'); ?></label>
                                <input type="text" class="form-control" id="first_name" placeholder="<?php echo $this->lang->line('first_name'); ?>" name="first_name" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name" class="col-form-label"><?php echo $this->lang->line('last_name'); ?></label>
                                <input type="text" class="form-control" id="last_name" placeholder="<?php echo $this->lang->line('last_name'); ?>" name="last_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email" class="col-form-label"><?php echo $this->lang->line('email'); ?></label>
                                <input type="email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('email'); ?>" name="email" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone" class="col-form-label"><?php echo $this->lang->line('phone'); ?></label>
                                <input type="text" class="form-control" id="phone" placeholder="<?php echo $this->lang->line('phone'); ?>" name="phone">
                            </div>
                        </div>  
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="comment"><?php echo $this->lang->line('comment'); ?></label>
                                <textarea class="form-control" id="comment" rows="5" name="comment" required="required" placeholder="<?php echo $this->lang->line('comment'); ?>"></textarea>
                            </div>                           
                        </div>                           
                        <button type="submit" class="btn btn-primary" style="margin-left: 16px;"><?php echo $this->lang->line('submit'); ?></button>
                        
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <section class="right-pane">
                    <h2 class="widget-title"><?php echo $this->lang->line('get_in_touch'); ?></h2> 

                    <div class="col-md-12 col-sm-12">
                        <ul>
                            <li>
                                <p><strong><?php echo $this->lang->line('address'); ?>: </strong><?php echo $settings->address; ?></p>
                            </li>
                            <li>
                                <p><strong><?php echo $this->lang->line('email'); ?>: </strong><?php echo $settings->email; ?></p>
                            </li>
                            <li>
                                <p><strong><?php echo $this->lang->line('phone'); ?>: </strong><?php echo $settings->phone; ?></p>
                            </li>
                            <li>
                                <p><strong><?php echo $this->lang->line('school_fax'); ?>: </strong><?php echo $settings->school_fax; ?></p>
                            </li>
                        </ul>
                    </div> 
                </section>
            </div>
        </div>
    </div>
</section> -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#contact').validate();
</script>


 <!-- Nivoslider js -->
 <script src="js/jquery.nivoslider.js"></script>
    <script src="js/nivoslider-active.js"></script>

    <!-- owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Countdown js -->
    <script src="js/coundown-timer.js"></script>

    <!-- Meanmenu js -->
    <script src="js/meanmenu.js"></script>

    <!-- Magnific Popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- counterup and waypoint js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>

    <!-- back to top js -->
    <script src="js/jquery.scrollUp.js"></script>

    <!-- wow js -->
    <script src="js/wow.min.js"></script>

    <!-- script js -->
    <script src="js/custom.js"></script>

