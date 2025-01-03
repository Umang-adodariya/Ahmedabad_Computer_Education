<!--Register Modal -->
<div class="modal fade register-modal  load-modal" id="registerModal" tabindex="-1"
    aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="load-modal-wrapper position-relative">
                <button class="closeButton sideMenuCls btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="far fa-times"></i></button>
                <div class="contact-form-wrap background-image"
                    style="background-image: url(&quot;assets/img/bg/contact_bg_1.png&quot;);">
                    <h2 class="border-title">Registration now</h2>
                    <p class="mt-n1 mb-30 sec-text">Connect with our course counsellor, and discover how ACE can help you unlock your full digital potential!</p>
                    <form action="mail.php" method="POST" class="contact-form ajax-contact register-form" id="register_form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" name="form" value="registration_form">
                                    <input type="text" class="form-control style-white" name="name" id="name"
                                        placeholder="Your Name*" required>
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="register_name_error" id="register_name_error" style="color: red;"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control style-white" name="email" id="email"
                                        placeholder="Email Address*" required>
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="register_email_error" id="register_email_error" style="color: red;"></div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number" class="form-control style-white" name="number" id="number"
                                        placeholder="Contact Number*" required>
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="register_number_error" id="register_number_error" style="color: red;"></div>
                            </div>
                            <div class="col-12">
                                <div class="captcha-container">
                                <div class="g-recaptcha" data-sitekey="6Lc0SJ8qAAAAAIh3K9OIB4DJav-crCgzE9-VD4mK"></div>
                                </div>
                            </div>
                            <div class="form-btn col-12 mt-10">
                                <button class="th-btn "  type="submit">Register<i class="fas fa-long-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>