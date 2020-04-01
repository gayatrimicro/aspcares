<?php

// echo "Fetched data successfully\n";
 //var_dump($_POST);
// echo $data;

$digits = 4;
$randnum = rand(pow(10, $digits-1), pow(10, $digits)-1);
date_default_timezone_set("America/Chicago");
$timezone = date("h:i:sa Y-m-d");
if($_POST){

        $lopbtnname=$_POST['lopbtnname9'];
        $lopbtnphone=$_POST['lopbtnphone9'];
        $lopbtnemail=$_POST['lopbtnemail9'];
        $lopbtnadd=$_POST['lopbtnadd9']; 
        $pagename = $_POST['loca'];

        // if(!empty($query)) {

            // $message = "You have Entered successfully!"; 
         // header("Location:display.php");
            
         
            $subject = "LOP Transfer RX : #$randnum $timezone";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Aspcares <Leads@aspcares.com>' . "\r\n";

            $mail= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

            <tr><td style='font-size:1.3em;' colspan='2'><strong>Details :</strong></td></tr>
                   <tr>
                     <td align='left' width='25%'><strong>Name :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopbtnname ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Email :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopbtnemail ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Phone :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopbtnphone ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Address :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopbtnadd ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'>TimeStamp: </td>
                     <td align='left' width='50%'>
                     ".  $timezone ."</td>
                     
                   </tr>
                 </table>";  
                   mail('Leads@aspcares.com', $subject, $mail, $headers);
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