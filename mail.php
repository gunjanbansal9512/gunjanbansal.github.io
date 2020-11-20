<?php 
if(isset($_POST['submit'])){ 
 $name=$_POST['name'];
 $subject = $_POST['subject'];
 $email = $_POST['email'];
 $message=$_POST['message'];
 $to="bansal.gunjan10@gmail.com";
 $header="From $email \r\n";
 mail($to,$subject,$message,$header);
 header("Location: index.html");
} 
 
?> 