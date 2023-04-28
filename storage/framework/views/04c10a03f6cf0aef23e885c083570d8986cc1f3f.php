
<?php $__env->startSection('content'); ?>


<div class="all-title-box">
    <div class="container text-center">
        <h1>Contact Us</h1>
    </div>
</div>

<div id="contact" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Need to talk? Sure we are Online!</h3>
            <p class="lead">Let us give you more details about about our services at Ysgol Caban aur. Please fill out the form below. </p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                        <div class="row row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                            </div>
                            <div class="text-center pd">
                                <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="map-box">
                    <div id="custom-places" class="small-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19076.350932378828!2d-4.273302463091447!3d53.29770546799391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4865ab5caacf3b31%3A0x3228908cc3cf1e4c!2sLlanbedrgoch%20LL76%208NX%2C%20UK!5e0!3m2!1sen!2sng!4v1678669257218!5m2!1sen!2sng" width="600" height="497" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                    
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fajob\Documents\GitHub\yca\resources\views/contact.blade.php ENDPATH**/ ?>