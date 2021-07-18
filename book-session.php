<?php
  // if(!isset($_GET['submit'])) {

  //   echo "Please submit form.";
  // }
  session_start();  
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $date = $_POST['date'];

  //Validation
  if(empty($name) || empty($visitor_email)) {
     echo "Name and email are mandatory!";
     exit;
  }

  $result = explode("T", $date);

  //Session Variables
  $_SESSION["name"] = $name;
  $_SESSION["email"] = $visitor_email;
  $_SESSION["date"] = $date;

  // $email_from = $visitor_email;
  $email_from = "book-session@leapfroglearning.ca";
  $email_subject = "Session Inquiry from leapfroglearning.ca";
  $email_body = "You have received a message from the user $name.\n" . 
                "email address: $visitor_email\n" . "Here is the message:\n$message " .  "$result[0]" . " $result[1]";
  
  $to = "knarine12@hotmail.ca";
  $headers = "From: $email_from \r\n";

  mail($to, $email_subject, $email_body, $headers);
  header('Location: http://www.leapfroglearning.ca/thank_you.php');
  exit();

/*NOTE: Redirect to a thank you page after submitting request*/
  /*<?php header("Location: http://www.example.com/another-page.php"); exit(); ?>*/
  
?>