<?php 
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $companyname = $_POST['companyname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $item = $_POST['item'];
    $enquiry = $_POST['enquiry'];


    require_once "phpmailer/PHPMailer.php";
    require_once "phpmailer/SMTP.php";
    require_once "phpmailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "hera email id"; //here email id
    $mail->Password = 'here email password';	//here password
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("here second email id");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = "<h3>Name: $fullname<br>Company Name:$companyname<br>Address:$address <br>Email:$email <br>Phone:$mobile<br>Enquiry Product:$item<br>Feedback:$enquiry</h3>";

    

    if($mail->send()){
    	header('location:enquiry.php');
        // $status = "success";
        // $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>