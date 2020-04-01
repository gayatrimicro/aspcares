<?php

// echo "Fetched data successfully\n";
// var_dump($_POST);
// echo $data;
$digits = 4;
$randnum = rand(pow(10, $digits-1), pow(10, $digits)-1);
date_default_timezone_set("America/Chicago");
$timezone = date("h:i:sa Y-m-d");
if($_POST){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $biz_phone=$_POST['biz-phone'];
        $clinic_address=$_POST['clinic-address'];
        $Locationname = $_POST['location-name'];

      
        // if(!empty($query)) {

            // $message = "You have Entered successfully!"; 
         // header("Location:display.php");
            

            $subject = "Request a Representative from: " . strtoupper($Locationname) . " #$randnum $timezone";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Aspcares <leads@aspcares.com>' . "\r\n";

            $mail= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>


            <tr><td style='font-size:1.3em;' colspan='2'><strong>Details :</strong></td></tr>
                   <tr>
                     <td align='left' width='25%'><strong>Name :</strong></td>
                     <td align='left' width='50%'>
                     ".  $name ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Biz Phone :</strong></td>
                     <td align='left' width='50%'>
                     ".  $biz_phone ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Email :</strong></td>
                     <td align='left' width='50%'>
                     ".  $email ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Clinic Address :</strong></td>
                     <td align='left' width='50%'>
                     ".  $clinic_address ."</td>
                   </tr>
                  
                   <tr>
                     <td align='left' width='25%'>TimeStamp: </td>
                     <td align='left' width='50%'>
                     ".  $timezone ."</td>
                     
                   </tr>
                 
                 </table>";  
                   mail('leads@aspcares.com', $subject, $mail, $headers);
                //   setcookie('tntcon','');
                //   unset($_POST);
                  //echo $mail;
                  // header('Location:index.html');
       // // } 
        // else {
        //     $mail = "Problem in insert. Try Again!";   
        // }
                 echo $mail;
}
else{
  echo "Submit Fail";
}
//echo "Fetched data successfully\n";

?>