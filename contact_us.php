<?php
if(isset($_POST['submit'])) {
	$msg='Name:' .$_POST['name'] . "\n"
	 . 'Email:' .$_POST['email'] . "\n"
	 . 'phone' .$_POST['phone'] . "\n"
	 . 'Subject' .$_POST['subject'] . "\n"
	 . 'Message' .$_POST['message'];
	 mail('mailusieit@gmail.com','Sample Contact Us Form',$msg);
}
else {
     exit(0);}
?>