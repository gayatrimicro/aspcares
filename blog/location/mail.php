<?php

// echo "Fetched data successfully\n";
// var_dump($_POST);
// echo $data;

$digits = 4;
$randnum = rand(pow(10, $digits-1), pow(10, $digits)-1);
date_default_timezone_set("America/Chicago");
$timezone = date("h:i:sa Y-m-d");

if($_POST){

        $locationnum=$_POST['locationnum'];
        $locationemail=$_POST['locationemail'];
        $rx=$_POST['rx'];
        $location=$_POST['selectlocation']; 
        $agree = $_POST['agree'];
        $pagelocation = $_POST['pagelocation']; 
        
        // if(!empty($query)) {

            // $message = "You have Entered successfully!"; 
         // header("Location:display.php");
            

            // $subject = "Request a Refill : #$randnum $timezone";
            // $headers  = 'MIME-Version: 1.0' . "\r\n";
            // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            // $headers .= 'From: Aspcares <refills@aspcares.com>' . "\r\n";

            $subject = "Request a Refill from : #$randnum $timezone ";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Aspcares <refills@aspcares.com>' . "\r\n";

            

            $mail= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>


            <tr><td style='font-size:1.3em;' colspan='2'><strong>Details :</strong></td></tr>
                   <tr>
                     <td align='left' width='25%'><strong>Number :</strong></td>
                     <td align='left' width='50%'>
                     ".  $locationnum ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Email :</strong></td>
                     <td align='left' width='50%'>
                     ".  $locationemail ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>RX # :</strong></td>
                     <td align='left' width='50%'>
                     ".  $rx ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Location :</strong></td>
                     <td align='left' width='50%'>
                     ".  $location ."</td>
                   </tr>
                    <tr>
                     <td align='left' width='25%'><strong>Contact Type :</strong></td>
                     <td align='left' width='50%'>
                     ".  $agree ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'>TimeStamp: </td>
                     <td align='left' width='50%'>
                     ".  $timezone ."</td>
                     
                   </tr>
                 </table>";  
                 //echo $mail;
                mail('refills@aspcares.com', $subject, $mail, $headers);
                //mail('askapic@aspcares.com', $subject, $mail, $headers);
                //   setcookie('tntcon','');
                //   unset($_POST);
                  //echo $mail;
                  // header('Location:index.html');
       // // } 
        // else {
        //     $mail = "Problem in insert. Try Again!";   
        // }
        
}
else{
  echo "Submit Fail";
}
//echo "Fetched data successfully\n";

?>