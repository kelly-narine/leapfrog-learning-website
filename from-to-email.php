<?php
  if(!isset($_POST['submit'])) {

    echo "Please submit form.";
  }

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  //Validation
  if(empty($name) || empty($visitor_email)) {
     echo "Name and email are mandatory!";
     exit;
  }

  $email_from = $visitor_email;
  $email_subject = "New Form Submission";
  $email_body = "You have received a message from the user $name.\n" . 
                "email address: $visitor_email\n" . "Here is the message:\n $message";
  
  $to = "knarine12@hotmail.ca";
  $headers = "From: $email_from \r\n";

  mail($to, $email_subject, $email_body, $headers);
  // header("Location: contact.html?mailsend");
  // This is a comment
  
?>