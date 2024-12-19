<div class="widget widget_info  register-sidebar">
    <h3 class="widget_title">Inquire Now</h3>
    <form action="mail.php" method="POST" class="contact-form ajax-contact" id="sidebar_form">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" name="form" value="course_form">
                    <input type="text" class="form-control style-white" name="name" id="name"
                        placeholder="Your Name*" required>
                    <i class="fal fa-user"></i>
                </div>
                <div class="sidebar_name_error" id="sidebar_name_error" style="color: red;"></div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="email" class="form-control style-white" name="email" id="email"
                        placeholder="Email Address*" required>
                    <i class="fal fa-envelope"></i>
                </div>
                <div class="sidebar_email_error" id="sidebar_email_error" style="color: red;"></div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="tel" class="form-control style-white" name="number" id="number" placeholder="Contact Number*" required>
                    <i class="fal fa-phone"></i>
                </div>
                <div class="sidebar_number_error" id="sidebar_number_error" style="color: red;"></div>
            </div>
            <div class="col-12">
                <div class="captcha-container">
                <div class="g-recaptcha" data-sitekey="6Lc0SJ8qAAAAAIh3K9OIB4DJav-crCgzE9-VD4mK"></div>
                </div>
            </div>
            <div class="form-btn col-12 mt-10">
                <button class="th-btn" type="submit">Submit<i
                        class="fas fa-long-arrow-right ms-2"></i></button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
        <!-- sent suceess msg popup -->
        <!-- <div class="popup-sent-msg">
            <div class="popup-inner-msg">
                <p>Our team will review your inquiry and get back to you shortly.</p> 
            </div>
        </div> -->

        <!-- sent sucess msg popup -->
    </form>
</div>