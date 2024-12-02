<div class="widget widget_info  register-sidebar">
    <h3 class="widget_title">Register Now</h3>
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
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="tel" class="form-control style-white" name="number" id="number" placeholder="Phone Number*" required>
                    <i class="fal fa-phone"></i>
                </div>
                <div class="sidebar_number_error" id="sidebar_number_error" style="color: red;"></div>
            </div>
            <div class="col-12">
                <div class="captcha-container">
                    <div class="input-refresh-btn mb-10">
                        <div id="captcha" class="captcha"></div>
                        <button id="refreshBtn" class="captcha-ref-btn"><i
                                class="fal fa-refresh"></i></button>
                    </div>
                    <div class="input-refresh-btn">
                        <input type="text" id="userInput" class="form-control style-white"
                            placeholder="Enter CAPTCHA" />
                        <!-- <button id="submitBtn" class="th-btn btn-green">Submit</button> -->
                    </div>
                    <div class="sidebar_captcha_error" id="sidebar_captcha_error" style="color: red;"></div>
                </div>
            </div>
            <div class="form-btn col-12 mt-10">
                <button class="th-btn" type="submit">Submit<i
                        class="fas fa-long-arrow-right ms-2"></i></button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>