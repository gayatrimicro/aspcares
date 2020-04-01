<?php

// echo "Fetched data successfully\n";
// var_dump($_POST);
// echo $data;
$digits = 4;
$randnum = rand(pow(10, $digits-1), pow(10, $digits)-1);
date_default_timezone_set("America/Chicago");
$timezone = date("Y-m-d h:i:sa");
if($_POST){

        $unsubscribe =$_POST['unsubscribe'];
       
       // $pagelocation = $_POST['pagelocation']; 
      
        // if(!empty($query)) {

            // $message = "You have Entered successfully!"; 
         // header("Location:display.php");
            

            $subject = "Unsubscribe:  $timezone ";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Aspcares <askapic@aspcares.com>' . "\r\n";

            $mail= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>


            <tr><td style='font-size:1.3em;' colspan='2'><strong>Details :</strong></td></tr>
                   <tr>
                     <td align='left' width='25%'><strong>Unsubscribe :</strong></td>
                     <td align='left' width='50%'>
                     ".  $unsubscribe ."</td>
                   </tr>
                   
                 </table>";  
                  // mail('askapic@aspcares.com', $subject, $mail, $headers);
                  mail('sales@gmicro.us', $subject, $mail, $headers);
               
                 echo $mail;
}
else{
  echo "Submit Fail";
}
//echo "Fetched data successfully\n";

?>