<?php 

$msg=stripslashes($_POST[msg]);

$recipientemail=$_POST[recipientemail];

$subject=stripslashes($_POST[subject]);

$recipientname=$_POST[recipientname];

$sendername=$_POST[sendername];

$senderemail=$_POST[senderemail];


mail("$recipientemail", "$subject", $msg, "From: $sendername <$senderemail>");

echo "Email sent.";

?>