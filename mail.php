<?php
$currentUrl = "$_SERVER[HTTP_REFERER]";
session_start();
$_SESSION['flash_message'] = 'Our team will review your inquiry and get back to you shortly.';

$requestUri = basename($_SERVER['HTTP_REFERER']);

if($requestUri == 'Ahmedabad_Computer_Education'){
    $requestUri = '/';
    $currentUrl = "$_SERVER[HTTP_REFERER]$requestUri";
}
// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptcha_secret = '6Lc0SJ8qAAAAANaK48-4xpBYiTlYUImvnA4IlgNx';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Verify the reCAPTCHA response
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    ];

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $resultData = json_decode($result);

    if (!$resultData->success) {
        // unset($_SESSION['flash_message']);
        // $_SESSION['captcha_failed']="Captcha verification failed. Please try again.";
        // $location = $requestUri;
        // header("Location: $location");
    }
    $location ='';
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST["subject"]);
    $number = trim($_POST["number"]);
    $message = trim($_POST["message"]);
    $form = trim($_POST["form"]);
    $date = trim($_POST["date"]);

    //     $toMail = "career@yopmail.com";
    // $ccMail = "umang@yopmail.com";
    $toMail = "career@ahmedabadcomputereducation.com";
    $ccMail = "info@virtualheight.com";

    if($form == "contact_form"){
        $subject = "New contact from $subject";

        $email_content = "Name: $name<br>";
        $email_content .= "Subject: $subject<br>";
        $email_content .= "Email: $email<br>";
        $email_content .= "Message:$message";
        $location = "connect.php";
    }
    elseif($form == "get_in_touch"){
        $subject = "ACE - Inquiry-GetinTouchForm";

        $email_content = "Name: $name<br>";
        $email_content .= "Number: $number<br>";
        $location = "/";
        $_SESSION['form'] = 'get-in-touch-form';

    }
    elseif($form == "registration_form"){
        $subject = "Demo Registration";

        $email_content = "Name: $name<br>";
        $email_content .= "Email: $email<br>";
        $email_content .= "Number: $number<br>";
        $location = "/";
        $_SESSION['form'] = 'register_form';
    }
    elseif($form == "booking_appointment"){
        $message = $subject;
        $subject = "Book New Appointment for $subject";

        $email_content = "Name: $name<br>";
        $email_content .= "Email: $email<br>";
        $email_content .= "Date: $date<br>";
        $email_content .= "Subject: $message<br>";
        $location = "/";
    }
    elseif($form == "newsletter_form"){
        $subject = "News letter subscribe";

        $email_content = "Email: $email";
        $location = "/";
    }
    elseif($form == "course_form"){
        $subject = "New inquire from course";

        $email_content = "Name: $name<br>";
        $email_content .= "Email: $email<br>";
        $email_content .= "Number: $number<br>";
        $location = $requestUri;
        $_SESSION['form'] = 'sidebar_form';
    }
    elseif($form == "quick_contact_form"){
        $subject = "Quick Contact";

        $email_content = "Name: $name<br>";
        $email_content .= "Email: $email<br>";
        $email_content .= "Number: $number<br>";
        $email_content .= "Message: $message";
        $location = "team-details.php";
    }
    elseif($form == "blog_form"){
        $subject = "Blog Reply";

        $email_content = "Name: $name<br>";
        $email_content .= "Email: $email<br>";
        $email_content .= "Message: $message";
        $location = "blog.php";
    }
    $email_content .= "<br>Request URL : $currentUrl";


    require_once 'db_connection.php';
    if(!in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])){
        try{
            if($requestUri == 'best-full-stack-developer.php' || $requestUri == 'best-python-training-course.php' || $requestUri == 'best-digital-marketing-training-course.php'){
                $sql = "INSERT INTO inquire (`name`, `email`, `contact_no`, `type`, `course_link`) 
                    VALUES ('$name', '$email', '$number', '$subject', '$currentUrl')";
                if ($conn->query($sql) === TRUE) {
                } else {
                    unset($_SESSION['flash_message']);
                    $_SESSION['captcha_failed']="Something went wrong, Please try again.";
                    $location = $requestUri;
                    header("Location: $location");
                }
                $conn->close();
            }
        } catch (Exception $e) {
            echo "Error: " . $sql . "<br>" . $conn->error;die;
            unset($_SESSION['flash_message']);
            $_SESSION['captcha_failed']="Something went wrong, Please try again.";
            $location = $requestUri;
            header("Location: $location");
        }
    }

    require 'vendor/autoload.php';
    // send grid smtp
    // $email = new \SendGrid\Mail\Mail();
    // $email->setFrom("demotest@appworkdemo.com", "Ahmedabad Computer Education");
    // $email->setSubject($subject);
    // $email->addTo($recipient, "Recipient Name");
    // $email->addContent(
    //     "text/html",$email_content
    // );

    // $sendgrid = new \SendGrid('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');  // Replace with your SendGrid API key

    // try {
    //     $response = $sendgrid->send($email);
    //     // echo '<script>alert(Thank You! Your message has been sent.);</script>';
    //     header("Location: $location");
    // } catch (Exception $e) {
    //     // echo "<script>alert(Oops! Something went wrong and we couldn't send your message.);</script>";
    //     header("Location: $location");
    //     // echo 'Caught exception: ' . $e->getMessage() . "\n";
    // }

    //  aws smtp
    // $mail = new PHPMailer(true);

    // try {
    //     // Server settings
    //     $mail->isSMTP();
    //     $mail->Host = 'email-smtp.ap-south-1.amazonaws.com'; // Your SMTP host
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'AKIAUEUHDK3KN23UONML'; // Your SMTP username
    //     $mail->Password = 'BEZ2V5iFetDaM1DiZJngpRJC2icvEQULZfhZ/6OBVZXu'; // Your SMTP password
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //     $mail->Port = 587;
    
    //     // Sender and recipient settings
    //     $mail->setFrom('tilak@web30india.com', 'ACE - VH');
    //     $mail->addAddress($toMail, 'career@ahmedabadcomputereducation.com'); // Add recipient
    //     $mail->addCC($ccMail, 'info@virtualheight.com'); // Add recipient
    
    //     // Email content
    //     $mail->isHTML(true);
    //     $mail->Subject = $subject;
    //     $mail->Body = $email_content;
    
    //     // Send email
    //     $mail->send();
    //     $location = $requestUri;
    //     header("Location: $location");
    // } catch (Exception $e) {
    //     $location = $requestUri;
    //     header("Location: $location");
    // }


    //swift mailer
    try {
        $transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 465, 'ssl'))
            ->setUsername('apikey')
            ->setPassword('');
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
    
        // Create a message
        $message = new Swift_Message();
    
        // Setting email content
        $message->setSubject($subject);
        $message->setBody($email_content);
        $message->addPart($email_content, 'text/html');
    
        // Setting from and recipient addresses
        $message->setfrom(['demotest@appworkdemo.com' => 'ACE - VH']);
        $message->addto($ccMail, 'Virtual Height');
        $message->addto($toMail, 'Career');
        //$message->addto("jaybanker.vhits@gmail.com", 'Jay');
        
    
        // Sending the message
        // $result = $mailer->send($message);
        $location = $requestUri;
        header("Location: $location");
    } catch (Exception $e) {
        echo $e->getMessage();
        die;
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    $location = $requestUri;
    // echo "There was a problem with your submission, please try again.";
    header("Location: $location");
}
?>
