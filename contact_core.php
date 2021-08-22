<?php

include_once("config.php");



if(isset($_POST["usrname"]) && isset($_POST["email_addr"]) && isset($_POST["phonenum"]) && isset($_POST["massage"])){

    $usrname=mysqli_real_escape_string($connect,$_POST['usrname']);
    $email_addr=mysqli_real_escape_string($connect,$_POST['email_addr']);
    $phonenum=mysqli_real_escape_string($connect,$_POST['phonenum']);
    $massage=mysqli_real_escape_string($connect,$_POST['massage']);

        $insertqurry = "INSERT INTO my_user (fullnam,email_addr,phonenum,massage) VALUES ('$usrname','$email_addr','$phonenum','$massage')";

    $runinsertqurry = mysqli_query($connect,$insertqurry);

    if($runinsertqurry ==true){

        header("location: contact.php?done=Successfuly sent");
    }else{
      

    }



    $html="<table><tr><td>Name</td><td>$usrname</td></tr> <tr><td>Email</td><td>$email_addr</td></tr> <tr><td>Phone</td><td>$phonenum</td></tr> <tr><td>Massage</td><td>$massage</td></tr></table>";

    include('smtp/PHPMailerAutoload.php');

	$mail = new PHPMailer(true); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->Username = "maruful502@gmail.com";
	$mail->Password = "Xossboy174581";
	$mail->SetFrom("maruful502@gmail.com");
    $mail->AddAddress("maruful502@gmail.com");
	$mail->Subject ="new contact us";
	$mail->Body =$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo "mail sent";
	}else{
		echo 'error';
	}



}

?>