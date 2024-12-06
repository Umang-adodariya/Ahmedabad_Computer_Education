<form class="th-comment-form" action="mail.php" method="POST" id="blog_form">
    <div class="form-title">
        <h3 class="blog-inner-title h5">Leave a Reply</h3>
        <p class="mb-30">Your email address will not be published. Required fields are marked</p>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <input type="hidden" name="form" value="blog_form">
            <input type="text" placeholder="Full Name*" class="form-control" name="name" id="name" required>
            <i class="far fa-user"></i>
        </div>
        <div class="blog_name_error" id="blog_name_error" style="color: red;"></div>
        <div class="col-md-6 form-group">
            <input type="email" placeholder="Your Email*" class="form-control" name="email" id="email" required>
            <i class="far fa-envelope"></i>
        </div>
        <div class="col-12 form-group">
            <textarea placeholder="Comment*" id="comment" class="form-control" name="message" required></textarea>
            <i class="fal fa-pencil"></i>
        </div>
        <div class="blog_comment_error" id="blog_comment_error" style="color: red;"></div>
        <div class="col-12">
            <div class="captcha-container">
                <div class="input-refresh-btn mb-10">
                    <div id="captcha" class="captcha"></div>
                    <button id="refreshBtn" class="captcha-ref-btn"><i class="fal fa-refresh"></i></button>
                </div>
                <div class="input-refresh-btn">
                    <input type="text" id="userInput" class="form-control" placeholder="Enter CAPTCHA" />
                </div>
            </div>
            <div class="blog_captcha_error" id="blog_captcha_error" style="color: red;"></div>
        </div>
        <div class="col-12 form-group mb-0">
            <button class="th-btn" type="submit">Submit Message <i class="fas fa-arrow-right ms-1"></i></button>
        </div>
    </div>
</form>