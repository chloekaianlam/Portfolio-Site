<?php

    $toemail = 'hello@chloekaianlam.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {

        echo 'ok';

    } else {
        
        echo 'failed';
    }

?>