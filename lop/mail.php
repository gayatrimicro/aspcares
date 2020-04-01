<?php
$digits = 4;
$randnum = rand(pow(10, $digits-1), pow(10, $digits)-1);
date_default_timezone_set("America/Chicago");
$timezone = date("Y-m-d h:i:sa");
// echo "Fetched data successfully\n";
 //var_dump($_POST);
// echo $data;

if($_POST){

        $lopname=$_POST['lopname'];
        $lopemail=$_POST['lopemail'];
        $lopphone=$_POST['lopphone'];
        $lopadd=$_POST['lopadd']; 
        

        // if(!empty($query)) {

            // $message = "You have Entered successfully!"; 
         // header("Location:display.php");
            
           
            $subject = "Request a Refill from LOP - #$randnum $timezone";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Aspcares <leads@aspcares.com>' . "\r\n";

            $mail= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>


            <tr><td style='font-size:1.3em;' colspan='2'><strong>Details : </strong></td></tr>
                   <tr>
                     <td align='left' width='25%'><strong>Name :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopname ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Email :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopemail ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Phone :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopphone ."</td>
                   </tr>
                   <tr>
                     <td align='left' width='25%'><strong>Clinic Address :</strong></td>
                     <td align='left' width='50%'>
                     ".  $lopadd ."</td>
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