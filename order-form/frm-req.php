<?php 
	$sdate = $_POST["odate"];
 	$sponumber  = $_POST["oponumber"];
 	$semail = $_POST["oemail"];
 	$scid  = $_POST["ocid"];
 	$sbillto = $_POST["obillto"];
 	$sshipto  = $_POST["oshipto"];

 	$stb1  = $_POST["ordtbl1"];
 	$stb2  = $_POST["ordtbl2"];
 	$stb3  = $_POST["ordtbl3"];
 	$stb4  = $_POST["ordtbl4"];

 	$stb11  = $_POST["ordtbl11"];
 	$stb12  = $_POST["ordtbl12"];
 	$stb13  = $_POST["ordtbl13"];
 	$stb14  = $_POST["ordtbl14"];

 	$stb21  = $_POST["ordtbl21"];
 	$stb22  = $_POST["ordtbl22"];
 	$stb23  = $_POST["ordtbl23"];
 	$stb24  = $_POST["ordtbl24"];

 	$stb31  = $_POST["ordtbl31"];
 	$stb32  = $_POST["ordtbl32"];
 	$stb33  = $_POST["ordtbl33"];
 	$stb34  = $_POST["ordtbl34"];

 	$stb41  = $_POST["ordtbl41"];
 	$stb42  = $_POST["ordtbl42"];
 	$stb43  = $_POST["ordtbl43"];
 	$stb44  = $_POST["ordtbl44"];

 	$stb51  = $_POST["ordtbl51"];
 	$stb52  = $_POST["ordtbl52"];
 	$stb53  = $_POST["ordtbl53"];
 	$stb54  = $_POST["ordtbl54"];

 	$stb61  = $_POST["ordtbl61"];
 	$stb62  = $_POST["ordtbl62"];
 	$stb63  = $_POST["ordtbl63"];
 	$stb64  = $_POST["ordtbl64"];

 	$stb71  = $_POST["ordtbl71"];
 	$stb72  = $_POST["ordtbl72"];
 	$stb73  = $_POST["ordtbl73"];
 	$stb74  = $_POST["ordtbl74"];

 	$stb81  = $_POST["ordtbl81"];
 	$stb82  = $_POST["ordtbl82"];
 	$stb83  = $_POST["ordtbl83"];
 	$stb84  = $_POST["ordtbl84"];

 	$stb91  = $_POST["ordtbl91"];
 	$stb92  = $_POST["ordtbl92"];
 	$stb93  = $_POST["ordtbl93"];
 	$stb94  = $_POST["ordtbl94"];

 	$sdte  = $_POST["odte"]

	 $subject ="ASP Cares Order Form ";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: <' . $semail .">" ."\r\n";
	
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Teleconsultation Details</strong></td></tr>
	   			   	<tr>
	                   <td align='left' width='35%'><strong>Order Date :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sdate ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='35%'><strong>PO Number :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sponumber ."</td>
	                </tr>

	   			   	<tr>
	                   <td align='left' width='35%'><strong>Contact Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $semail ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='35%'><strong>Customer ID :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $scid ."</td>
	                </tr>
	                <tr><td style='font-size:1.3em;' colspan='2'><strong>BILL TO :</strong></td></tr>
	   			   	<tr>
	                   <td align='left' width='35%'><strong>What is the nature of your injury? :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sbillto ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='35%'><strong>SHIP TO :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sshipto ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='35%'><strong>DATE :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sdte ."</td>
	                </tr>

	                <tr>
	                	<td align='left' width='85%'>------------------------Order Tabel Details---------------------------</td>
	                	<td align='left' width='10%'></td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'><strong>DRUG NAME / DOSAGE FORM</strong></td>
	                   <td align='left' width='24%'><strong>STRENGTH</strong></td>
	                   <td align='left' width='24%'><strong>QTY/UNIT</strong></td>
	                   <td align='left' width='24%'><strong>QUANTITY</strong></td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb1 ."</td>
	                   <td align='left' width='24%'>".  $stb2 ."</td>
	                   <td align='left' width='24%'>".  $stb3 ."</td>
	                   <td align='left' width='24%'>".  $stb4 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb11 ."</td>
	                   <td align='left' width='24%'>".  $stb12 ."</td>
	                   <td align='left' width='24%'>".  $stb13 ."</td>
	                   <td align='left' width='24%'>".  $stb14 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb21 ."</td>
	                   <td align='left' width='24%'>".  $stb22 ."</td>
	                   <td align='left' width='24%'>".  $stb23 ."</td>
	                   <td align='left' width='24%'>".  $stb24 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb31 ."</td>
	                   <td align='left' width='24%'>".  $stb32 ."</td>
	                   <td align='left' width='24%'>".  $stb33 ."</td>
	                   <td align='left' width='24%'>".  $stb34 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb41 ."</td>
	                   <td align='left' width='24%'>".  $stb42 ."</td>
	                   <td align='left' width='24%'>".  $stb43 ."</td>
	                   <td align='left' width='24%'>".  $stb44 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb51 ."</td>
	                   <td align='left' width='24%'>".  $stb52 ."</td>
	                   <td align='left' width='24%'>".  $stb53 ."</td>
	                   <td align='left' width='24%'>".  $stb54 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb61 ."</td>
	                   <td align='left' width='24%'>".  $stb62 ."</td>
	                   <td align='left' width='24%'>".  $stb63 ."</td>
	                   <td align='left' width='24%'>".  $stb64 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb71 ."</td>
	                   <td align='left' width='24%'>".  $stb72 ."</td>
	                   <td align='left' width='24%'>".  $stb73 ."</td>
	                   <td align='left' width='24%'>".  $stb74 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb81 ."</td>
	                   <td align='left' width='24%'>".  $stb82 ."</td>
	                   <td align='left' width='24%'>".  $stb83 ."</td>
	                   <td align='left' width='24%'>".  $stb84 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>".  $stb91 ."</td>
	                   <td align='left' width='24%'>".  $stb92 ."</td>
	                   <td align='left' width='24%'>".  $stb93 ."</td>
	                   <td align='left' width='24%'>".  $stb94 ."</td>
	                </tr>


	                 
	               </table>";  
	              
			if(mail("fe@gmicro.us", $subject, $message, $headers))
	  	  {
			echo "Your enquiry has been sent successfully"; 
		}
		else{
			echo "error: Check the value";
		}
	  	
	
?>