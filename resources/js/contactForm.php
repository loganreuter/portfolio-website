<?php

if (isset($_POST['submit'])){
  $fname = $_POST['first-name'];
  $lname = $_POST['last-name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['name'];

  $mailTo = "lreuter2020@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an email from ".$fname." ".$lname.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);

  header("Location: website.html?mailsend");
}
