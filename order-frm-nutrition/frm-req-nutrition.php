<?php 
 	$sbillto = $_POST["nobillto"];
 	$sshipto  = $_POST["noshipto"];
 	$sshipdate = $_POST["nshipdate"];

 	$snq1  = $_POST["nq1"];
 	$snp1  = $_POST["np1"];

 	$snq2  = $_POST["nq2"];
 	$snp2  = $_POST["np2"];

 	$snq3  = $_POST["nq3"];
 	$snp3  = $_POST["np3"];

 	$snq4  = $_POST["nq4"];
 	$snp4  = $_POST["np4"];

 	$snq5  = $_POST["nq5"];
 	$snp5  = $_POST["np5"];

 	$snq6  = $_POST["nq6"];
 	$snp6  = $_POST["np6"];

 	$snq7  = $_POST["nq7"];
 	$snp7  = $_POST["np7"];

 	$snq8  = $_POST["nq8"];
 	$snp8  = $_POST["np8"];

 	$snq9  = $_POST["nq9"];
 	$snp9  = $_POST["np9"];

 	$snq10  = $_POST["nq10"];
 	$snp10  = $_POST["np10"];

 	$snq11  = $_POST["nq11"];
 	$snp11  = $_POST["np11"];

 	$snq12  = $_POST["nq12"];
 	$snp12  = $_POST["np12"];

 	$snq13  = $_POST["nq13"];
 	$snp13  = $_POST["np13"];

 	$snq14  = $_POST["nq14"];
 	$snp14  = $_POST["np14"];

 	$snq15  = $_POST["nq15"];
 	$snp15  = $_POST["np15"];
 	$sncg10  = $_POST["ncg10"];
 	$sncg50  = $_POST["ncg50"];

 	$snq16  = $_POST["nq16"];
 	$snp16  = $_POST["np16"];

 	$snq17  = $_POST["nq17"];
 	$snp17  = $_POST["np17"];

 	$snq18  = $_POST["nq18"];
 	$snp18  = $_POST["np18"];
 	$snohm2  = $_POST["nohm2"];
 	$snohm20  = $_POST["nohm20"];
 	

 	$snodby  = $_POST["nodby"];
 	$snodte  = $_POST["nodte"];

	 $subject ="ASP Cares Nutrition Order Form ";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// $headers .= "From: <" . $semail .">" ."\r\n";
	
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Order Details</strong></td></tr>
	   			   	<tr>
	                   <td align='left' width='35%'><strong>Bill To :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sbillto ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='35%'><strong>Ship To :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sshipto ."</td>
	                </tr>

	   			   	<tr>
	                   <td align='left' width='35%'><strong>Shipping Date :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $sshipdate ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='35%'><strong>Order By :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $snodby ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='35%'><strong>Date :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $snodte ."</td>
	                </tr>
	               

	                <tr>
	                	<td align='left' width='85%'>------------------------Order Tabel Details---------------------------</td>
	                	<td align='left' width='10%'></td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'><strong>DRUG NAME / DOSAGE FORM</strong></td>
	                   <td align='left' width='24%'><strong>STRENGTH</strong></td>
	                   <td align='left' width='24%'><strong>QUANTITY</strong></td>
	                   <td align='left' width='24%'><strong>PRICE (office use only)</strong></td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Arginine Hydrochloride MDV </td>
	                   <td align='left' width='24%'>200 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq1 ."</td>
	                   <td align='left' width='24%'>".  $snp1 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Ascorbic Acid MDV</td>
	                   <td align='left' width='24%'>500 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq2 ."</td>
	                   <td align='left' width='24%'>".  $snp2 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>B-Complex (B1/B2/B3/B5/B6) MDV</td>
	                   <td align='left' width='24%'>00/2/100/2/2 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq3 ."</td>
	                   <td align='left' width='24%'>".  $snp3 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Biotin MDV </td>
	                   <td align='left' width='24%'>10 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq4 ."</td>
	                   <td align='left' width='24%'>".  $snp4 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Dexpanthenol MDV</td>
	                   <td align='left' width='24%'>250 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq5 ."</td>
	                   <td align='left' width='24%'>".  $snp5 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Edetate Calcium Disodium MDV</td>
	                   <td align='left' width='24%'>300 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq6 ."</td>
	                   <td align='left' width='24%'>".  $snp6 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Glutathione MDV</td>
	                   <td align='left' width='24%'>200 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq7 ."</td>
	                   <td align='left' width='24%'>".  $snp7 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Methionine/Inositol/Choline Chloride/Cyanocobalamin MDV</td>
	                   <td align='left' width='24%'>25/50/50/1 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq8 ."</td>
	                   <td align='left' width='24%'>".  $snp8 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Methylcobalamin MDV</td>
	                   <td align='left' width='24%'>1 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq9 ."</td>
	                   <td align='left' width='24%'>".  $snp9 ."</td>
	                </tr>
	                <tr>
	                   <td align='left' width='24%'>Pyridoxine HCl MDV</td>
	                   <td align='left' width='24%'>100 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq10 ."</td>
	                   <td align='left' width='24%'>".  $snp10 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Taurine MDV </td>
	                   <td align='left' width='24%'>50 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq11 ."</td>
	                   <td align='left' width='24%'>".  $snp11 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Testosterone Cypionate (Grapeseed Oil) MDV</td>
	                   <td align='left' width='24%'>200 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq12 ."</td>
	                   <td align='left' width='24%'>".  $snp12 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Zinc (Sulfate) MDV</td>
	                   <td align='left' width='24%'>2.5 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq13 ."</td>
	                   <td align='left' width='24%'>".  $snp13 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Magnesium Chloride MDV</td>
	                   <td align='left' width='24%'>200 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq14 ."</td>
	                   <td align='left' width='24%'>".  $snp14 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Calcium Gluconate SDV ".  $sncg10 ." , ".  $sncg50 ."</td>
	                   <td align='left' width='24%'>10%</td>
	                   <td align='left' width='24%'>".  $snq15 ."</td>
	                   <td align='left' width='24%'>".  $snp15 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Folic Acid MDV</td>
	                   <td align='left' width='24%'>5 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq16 ."</td>
	                   <td align='left' width='24%'>".  $snp16 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Ketorolac Tromethamine SDV</td>
	                   <td align='left' width='24%'>30 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq17 ."</td>
	                   <td align='left' width='24%'>".  $snp17 ."</td>
	                </tr>

	                <tr>
	                   <td align='left' width='24%'>Ondansetron HCl MDV ".  $snohm2 ." , ".  $snohm20 ."</td>
	                   <td align='left' width='24%'>2 mg/mL</td>
	                   <td align='left' width='24%'>".  $snq18 ."</td>
	                   <td align='left' width='24%'>".  $snp18 ."</td>
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