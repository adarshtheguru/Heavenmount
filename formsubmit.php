<?php

// It is mandatory to set the content-type when sending HTML email
// print_r($_POST);
$headers      = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\n";
$eol         = "\r\n";
$bcc = "adarshji1999@gmail.com";
$fromname    = 'Heaven Mount';
$fromaddress = 'no-reply@heavenmount.com';
$headers .= "From: " . $fromname . "<" . $fromaddress . ">" . $eol;
$headers .= 'Bcc: ' . $bcc . ' ' . "\r\n";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$Interest = $_POST['InterestedIn'];

$mail_message = "<div style=\"line-height:20px;width:600px;margin:0 auto;\">
                            <p align='center' style=\"font-size: 16px; color: #000011;\">This lead already exists in our system and cannot be re-registered. The details are as follows -  </p>
                            <table style=\"border:2px solid #000;border-collapse:collapse;width:600px;text-align:center;\">
                                <tr>
                                <th style=\"border:1px solid #000; padding:10px;width:50%;background-color:#DCDCDC;\">
                                    <p style=\"font-size: 12px; color: #000011;\">Name</p>
                                </th>
                                <td style=\"border:1px solid #000;padding:10px;width:50%;background-color:#ffffff;\">
                                    <p style=\"font-size: 12px; color: #000011;\">" . $name . "</p>
                                </td>
                                </tr>

                                <tr>
                                <th style=\"border:1px solid #000; padding:10px;width:50%;background-color:#DCDCDC;\">
                                    <p style=\"font-size: 12px; color: #000011;\">Email</p>
                                </th>
                                <td style=\"border:1px solid #000;padding:10px;width:50%;background-color:#ffffff;\">
                                    <p style=\"font-size: 12px; color: #000011;\">" . $email . "</p>
                                </td>
                                </tr>

                                <tr>
                                <th style=\"border:1px solid #000; padding:10px;width:50%;background-color:#DCDCDC;\">
                                    <p style=\"font-size: 12px; color: #000011;\">Mobile</p>
                                </th>
                                <td style=\"border:1px solid #000;padding:10px;width:50%;background-color:#ffffff;\">
                                    <p style=\"font-size: 12px; color: #000011;\">" . $phone . "</p>
                                </td>
                                </tr> 

                                <tr>
                                <th style=\"border:1px solid #000; padding:10px;width:50%;background-color:#DCDCDC;\">
                                    <p style=\"font-size: 12px; color: #000011;\">Mobile</p>
                                </th>
                                <td style=\"border:1px solid #000;padding:10px;width:50%;background-color:#ffffff;\">
                                    <p style=\"font-size: 12px; color: #000011;\">" . $Interest . "</p>
                                </td>
                                </tr> 
                                
                                <tr>
                                <th style=\"border:1px solid #000; padding:10px;width:50%;background-color:#DCDCDC;\">
                                    <p style=\"font-size: 12px; color: #000011;\">Message</p>
                                </th>
                                <td style=\"border:1px solid #000;padding:10px;width:50%;background-color:#ffffff;\">
                                    <p style=\"font-size: 12px; color: #000011;\">" . $message . "</p>
                                </td>
                                </tr>
                               

                            </table>                      
                            </div>";
if (mail('info@heavenmount.com', 'New enquiry lead', $mail_message, $headers)) {
    echo 'sent';
} else {
    echo 'not sent';
}

$mysqli = new mysqli("localhost","heavenmount","Password@123","heavenmount_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "INSERT INTO leads (name,email,phone,interest,message)
VALUES ('". $name ."', '". $email ."', '". $phone ."', '". $Interest ."', '". $message ."')";
$mysqli->query($sql);

die;
?>
