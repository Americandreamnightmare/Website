<?php
  $name = $_POST['name'];
  $visit_email = $_POST['email'];
  $message = $_POST['message'];


  $email_from = 'dchandak916@gmail.com';

  $email_subject = "New Form Submission";

  // $email_body = "User Name: $name \n "User Email: $visit_email" \n User Message: $message";
  $email_body="From: $name \n Message: $message";
                     
  $to = "darshc086666@gmail.com";


  $headers = "From:  $email_form  \r\n";


  $headers = "Reply-To:  $visitor_email\r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: website.html")
