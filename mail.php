<?php
$youremail = "bee_sf@yahoo.com";
$subject = "Contact";
$thankyou = "thankyou.php";

if($email == ""){
?>
<br/>
<?php
}elseif($name == ""){
?>
 <br/>
<?php
}elseif($message == ""){
?> <br/>
<?php
}else{

$msg = ereg_replace("\\\'", "'", $message);
$msg = ereg_replace('\\\"', "\"", $msg);
$message1 = "from: $name\nemail: $email\nmessage:\n$msg1";

mail($youremail, $subject, $msg, "From: $email\r\nReply-to: $email\r\n");
?><meta http-equiv="refresh" content="0; url=<?echo $thankyou;?>""><?php
}
?>