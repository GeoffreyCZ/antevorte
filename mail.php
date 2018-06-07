<?php
if($_POST){
    $name = @trim(stripslashes($_POST["form-name"]));
    $from = @trim(stripslashes($_POST["form-email"]));
    $subject = @trim(stripslashes($_POST["form-subject"]));
    $message = @trim(stripslashes($_POST["form-message"]));
    $to = 'antevorte@antevorte.cz';

    $headers = "MIME-Version: 1.0" . "\n" .
        "Content-type: text/plain; charset=UTF-8" . "\n" .
        "From: {$name} <{$from}>" . "\n" .
        "Reply-To: <{$from}>" . "\n" .
        "Subject: {$subject}" . "\n" .
        "X-Mailer: PHP/" . phpversion();

    mb_send_mail($to, $subject, $message, $headers);
}