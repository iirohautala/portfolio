<?php

if (!empty($_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $name = strip_tags($name);
        $email = strip_tags($email);
        $subjecti = strip_tags($subject);
        $message = strip_tags($message);

        $toemail = 'iiroHautala@gmail.com';
        $tosubject =  "Contact from Contact Form";
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
        $bodyParagraphs = ["Name: {$name}<br>", "Email: {$email}<br>", "Subject: {$subject}<br><br>", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toemail, $tosubject, $body, $headers)) {
                header('Location: thankyou.php');
        }
        else {
                $errorMessage = 'Oops, something went wrong. Please try again later';
        }
}

?>