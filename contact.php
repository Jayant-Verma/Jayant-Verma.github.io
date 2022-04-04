<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

mail("jayantverma8533@gmail.com", $subject, $message, "From: $name <$email>")

?>