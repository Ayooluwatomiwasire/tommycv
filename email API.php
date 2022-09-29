<?php
ini_set('display_errors', '1'); 
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
?>

<?php
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "mail.wetindey.xyz";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "chalyst@wetindey.xyz";
//Set gmail password
	$mail->Password = "Chukwu25@2015";
//Email subject
	$mail->Subject = "Chalyst Transaction [Credit: ". number_format($amount, 2)." USD]";
//Set sender email
	$mail->setFrom('Chalyst@wetindey.xyz');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	
//Email body
	$mail->Body = "<style>
        
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

    <center style='width: 100%; background-color: #f5f6fa;'>
        <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
            <tr>
               <td style='padding: 40px 0;'>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding-bottom:25px'>
                                    <a href='#'><img style='height: 60px' src='https://chalyst.wetindey.xyz/mobile/img/favicon.ico' alt='logo'></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                        <tbody>
                            <tr>
                                <td style='padding: 30px 30px 15px 30px;'>
                                    <h2 style='font-size: 18px; color: #84B700; font-weight: 600; margin: 0;'>Chalyst Transaction [Credit: ". number_format($amount, 2)." USD]</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 30px 20px;'>
                                    <p style='margin-bottom: 10px;'>Dear <b>$fullname</b></p>
									
									<p style='margin-bottom: 10px;''><b><u>Chalyst eLectronic Notification Service (CeNS)</u></b></p>
									
                                    <p style='margin-bottom: 10px;''>We wish to inform you that a Credit transaction occurred on your account with us.<br><br>
 
The details of this transaction are shown below:<br><br>
<b><u>Transaction Notification</u></b></p>

<p style='margin-bottom: 10px;'>Amount: <b>&#36;". number_format($amount, 2)."</b></p>
<p style='margin-bottom: 10px;'>Value Date: <b>". date('jS-M-Y', strtotime($date)) ."</b></p>
<p style='margin-bottom: 10px;'>New Balance: <b>&#36;".number_format($total_savings, 2)."</b></p>
                                
                                </td>
                            </tr>
						
                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding:25px 20px 0;'>
                                    <p style='font-size: 13px;'>Copyright © 2021 Chalyst. All rights reserved. <br> </p>
                                    
                                    <p style='padding-top: 15px; font-size: 12px;'>This email was sent to you as a registered user on <a style='color: #84B700; text-decoration:none;' href='#'>Chalyst</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>";
//Add recipient
	$mail->addAddress("$email");
//Finally send email
	if ( $mail->send() ) {
	    echo "<script>alert('$fullname Savings Added Successfully')
location.href='savings_history.php?uin=".$row['uin']."'</script>";
	
	}
?>