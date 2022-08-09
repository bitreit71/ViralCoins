<?php
    $myemail = 'info@viralcoins.agency';//<-----Put Your email address here.
    if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email'])|| empty($_POST['describe']) || empty($_POST['contact']) || empty($_POST['goals']))
    {
        $errors .= "\n Error: all fields are required";
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email_address = $_POST['email'];
    $describe = $_POST['describe'];
    $contact = $_POST['contact'];
    $contact = $_POST['goals'];

    $to = $myemail;
    $email_subject = "New user";
    $email_body = "You have received a new message.".
    " Here are the details:\n \n 
    Name: $name \n ".
    "Telegram: $phone".
    "Email: $email_address".
    "Website: $describe".
    "Promotion budget: $contact".
    "Project & goals: $goals";

    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    header('Location:index.html?showSubmitPopup=true');
?>