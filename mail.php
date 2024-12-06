<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        $toMail = "info@virtualheight.com";

        if($form == "contact_form"){
            $subject = "New contact from $subject";

            $email_content = "Name: $name<br>";
            $email_content .= "Subject: $subject<br>";
            $email_content .= "Email: $email<br>";
            $email_content .= "Message:$message";
            $location = "contact.php";
        }
        elseif($form == "get_in_touch"){
            $subject = "New contact from Get in Touch";

            $email_content = "Name: $name<br>";
            $email_content .= "Number: $number<br>";
            $location = "index.php";

        }
        elseif($form == "registration_form"){
            $subject = "New Registration";

            $email_content = "Name: $name<br>";
            $email_content .= "Email: $email<br>";
            $email_content .= "Number: $number<br>";
            $location = "index.php";
        }
        elseif($form == "booking_appointment"){
            $message = $subject;
            $subject = "Book New Appointment for $subject";

            $email_content = "Name: $name<br>";
            $email_content .= "Email: $email<br>";
            $email_content .= "Date: $date<br>";
            $email_content .= "Subject: $message<br>";
            $location = "index.php";
        }
        elseif($form == "newsletter_form"){
            $subject = "News letter subscribe";

            $email_content = "Email: $email";
            $location = "index.php";
        }
        elseif($form == "course_form"){
            $subject = "New Registration";

            $email_content = "Name: $name<br>";
            $email_content .= "Email: $email<br>";
            $email_content .= "Number: $number";
            $location = "course-2.php";
        }
        elseif($form == "course_form"){
            $subject = "New Registration";

            $email_content = "Name: $name<br>";
            $email_content .= "Email: $email<br>";
            $email_content .= "Number: $number";
            $location = "course-2.php";
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
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'email-smtp.ap-south-1.amazonaws.com'; // Your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = 'AKIAUEUHDK3KN23UONML'; // Your SMTP username
            $mail->Password = 'BEZ2V5iFetDaM1DiZJngpRJC2icvEQULZfhZ/6OBVZXu'; // Your SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        
            // Sender and recipient settings
            $mail->setFrom('tilak@web30india.com', 'Your Application Name');
            $mail->addAddress($toMail, 'Recipient Name'); // Add recipient
        
            // Email content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $email_content;
        
            // Send email
            $mail->send();
            echo 'Email has been sent successfully.';
        } catch (Exception $e) {
            echo "Email could not be sent. Error: {$mail->ErrorInfo}";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        // echo "There was a problem with your submission, please try again.";
        header("Location: $location");

    }

?>
