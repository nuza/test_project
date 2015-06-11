<?php

require_once 'clsCommonBase.php';
require_once 'capcha/securimage.php';
extract($_POST);
$securimage = new Securimage();
if (isset($_POST['contact_send'])) {
    
//    'name' => string '545' (length = 3)
//    'email' => string 'nuwan@sas3.com' (length = 14)
//    'subject' => string '454' (length = 3)
//    'massage' => string '54545' (length = 5)
//    'answer' => string '10' (length = 2)
//    'contact_send' => string 'SUBMIT' (length = 6)

    if ($securimage->check(${'answer'}) == false
    ) {
        $pro_save_msg =
                CommonBase::createMassageDiv(
                        $type = 'err', $headding = "Invalid data fields  !", $massage = 'Required files must be empty or invalid ', 100);
    } elseif (
            ${'name'} == null ||
            ${'email'} == null ||
            ${'subject'} == null ||
            ${'massage'} == null
    ) {
        $pro_save_msg =
                CommonBase::createMassageDiv(
                        $type = 'err', $headding = "Invalid data fields  !", $massage = 'Required files must be empty or invalid ', 100);
    } else {
        // multiple recipients
        $to = 'info@richsuccessinternational.com' . ', '; // note the comma
        $to .= 'email@w3ssolutions.com';

// subject
        ${'subject2'} =  $subject;
        $subject = 'Contact us request !';

// message
        $message = '
<html>
<head>
  <title>' . ${'subject'} . '</title>
</head>
<body>
  <h3>You have contact us request!</h3>
   Name : ' . ${'name'} . '<br/><br/>
   Email : ' . ${'email'} . '<br/><br/>
   Subject :' . ${'subject2'} . ' <br/><br/>
   Massage : ' . ${'massage'} . '<br/><br/>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
        //   $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        $headers .= 'From: ' . ${'name'} . ' <' . ${'email '} . '>' . "\r\n";
        //   $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        //   $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
// Mail it
        $send = mail($to, $subject, $message, $headers);
        if ($send) {
            $pro_save_msg =
                    CommonBase::createMassageDiv(
                            $type = 'suc', $headding = "Successfully Sent", $massage = 'Thank you for submitting. We will contact you with in 24H.', 100);
            ${'name'} = "";
            ${'email'} = "";
            ${'subject'} = "";
            ${'massage'} = "";
        } else {
            $pro_save_msg =
                    CommonBase::createMassageDiv(
                            $type = 'err', $headding = "Email cannot be send", $massage = 'Please try again in few minutes', 100);
        }
    }
}
?>
