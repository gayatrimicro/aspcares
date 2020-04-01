<?php

// echo "Fetched data successfully\n";
// var_dump($_POST);
// echo $data;
$digits = 4;
$randnum = rand(pow(10, $digits-1), pow(10, $digits)-1);
date_default_timezone_set("America/Chicago");
$timezone = date("Y-m-d h:i:sa");
if($_POST){

        $firstname=$_POST['firstnamecn'];
        $lastname=$_POST['lastnamecn'];
        $locationemail=$_POST['askemailcn'];
        $enquiry=$_POST['askmsgcn']; 
       // $pagelocation = $_POST['pagelocation']; 
      
        // if(!empty($query)) {

            // $message = "You have Entered successfully!"; 
         // header("Location:display.php");
            

            $subject = "Save money on cancer medication:  $timezone ";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Aspcares <askapic@aspcares.com>' . "\r\n";

            $mail= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>


            <tr><td style='font-size:1.3em;' colspan='2'><strong>Details :</strong></td></tr>
                   <tr>
                     <td align='left' width='25%'><strong>First Name :</strong></td>
                     <td align='left' width='50%'>
                     ".  $firstname ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Last Name :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lastname ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Email :</strong></td>
                     <td align='left' width='50%'>
                     ".  $locationemail ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Description :</strong></td>
                     <td align='left' width='50%'>
                     ".  $enquiry ."</td>
                   </tr>
                   <tr>
                   <td align='left' width='25%'>TimeStamp: </td>
                   <td align='left' width='50%'>
                   ".  $timezone ."</td>
                   
                 </tr>
                 </table>";  
                  // mail('askapic@aspcares.com', $subject, $mail, $headers);
                  mail('connect.leo@gmail.com', $subject, $mail, $headers);
               
                 echo $mail;
}
else{
  echo "Submit Fail";
}
//echo "Fetched data successfully\n";

?>