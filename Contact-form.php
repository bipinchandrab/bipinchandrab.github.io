<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $my_email = 'bipin.b.chandra@gmail.com';
    $email_subject = 'New message from Portfolio';
    $email_body = "Name: $name.\n".
                        "From: $visitor_email.\n".
                            "Message: $message.";
    mail($my_email,$email_subject,$email_body)
?>