<?php
if (isset($_POST['send'])) {

   $name = htmlspecialchars($_POST['name']);
   $phone = htmlspecialchars($_POST['phone']);
   $service = htmlspecialchars($_POST['service']);
   $address = htmlspecialchars($_POST['address']);
   $address = htmlspecialchars($_POST['message']);

   $To = "sohailshaiksk12345@gmail.com"; // your domain email
//    $To = "bikeserviceurban@gmail.com"; // your domain email
   $DateOf = date('d/m/y');
   $MailSubject = "Contact Us Request From - $name $DateOf";

   $headers = "MIME-Version: 1.0\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8\r\n";
   $headers .= "From: killteckpestcontrolindia@gmail.com\r\n";
   $headers .= "Reply-To: $email\r\n";

   $Message = "
   <table width='100%' cellpadding='0' cellspacing='0' border='0' style='font-family:Arial, Helvetica, sans-serif; background-color:#f4f4f4; padding:20px;'>
  <tr>
    <td align='center'>
      
      <table width='600' cellpadding='0' cellspacing='0' border='0' style='background-color:#ffffff; border:1px solid #dddddd;'>
        
        <!-- Header -->
        <tr>
          <td style='background-color:#192f5d; color:#ffffff; padding:20px; font-size:22px; font-weight:bold; text-align:center;'>
            Kill Teck Pest Control - New Contact Request
          </td>
        </tr>

        <!-- Body -->
        <tr>
          <td style='padding:20px;'>
            
            <table width='100%' cellpadding='8' cellspacing='0' border='0' style='border-collapse:collapse; font-size:14px; color:#333333;'>
              
              <tr>
                <td width='35%' style='border:1px solid #dddddd; font-weight:bold; background-color:#f9f9f9;'>Name</td>
                <td style='border:1px solid #dddddd;'>$name</td>
              </tr>

              <tr>
                <td style='border:1px solid #dddddd; font-weight:bold; background-color:#f9f9f9;'>Phone</td>
                <td style='border:1px solid #dddddd;'>$phone</td>
              </tr>

              <tr>
                <td style='border:1px solid #dddddd; font-weight:bold; background-color:#f9f9f9;'>Service</td>
                <td style='border:1px solid #dddddd;'>$service</td>
              </tr>

              <tr>
                <td style='border:1px solid #dddddd; font-weight:bold; background-color:#f9f9f9;'>Client Address</td>
                <td style='border:1px solid #dddddd;'>$address</td>
              </tr>

               <tr>
                <td style='border:1px solid #dddddd; font-weight:bold; background-color:#f9f9f9;'>Message</td>
                <td style='border:1px solid #dddddd;'>$message</td>
              </tr>

            </table>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style='background-color:#f7f7f7; padding:15px; text-align:center; font-size:12px; color:#777777;'>
            © 2026 Kill Teck Pest Control | Contact Form Notification
          </td>
        </tr>

      </table>

    </td>
  </tr>
</table>
   ";

   $Mail = mail($To, $MailSubject, $Message, $headers);

   if ($Mail) {
       header("Location: thankyou.php");
       exit();
   } else {
       header("Location: contact.php");
   }
}
?>
