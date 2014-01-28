
<?php
	require_once('../preheader.php'); // <-- this include file MUST go first before any HTML/output

	#the code for the class
	include_once ('../ajaxCRUD.class.php'); // <-- this include file MUST go first before any HTML/output

	#create an instance of the class
    $tblFriend = new ajaxCRUD("leche", "leche", "id_leche", "../");
	
	

?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php 	$tblFriend->insertHeader(); ?>

		<!-- these js/css includes are ONLY to make the calendar widget work (fldDateMet);
			 these includes are not necessary for the class to work!! -->
		<link rel="stylesheet" href="includes/jquery.ui.all.css">
		<script src="includes/jquery.ui.core.js"></script>
		<!--script src="includes/jquery.ui.widget.js"></script-->
		<script src="includes/jquery.ui.datepicker.js"></script>
	</head>

<?php
date_default_timezone_set('America/Bogota');
//$dia=date("m-d");
$dia=date("d");
$numdias=date("t");
echo $dia;
echo $numdias;
if($quincena==1)
{
if($dia>=1 and $dia<=15)
{
if($dia>=1){ $tblFriend->displayAs("d01", "1");}
  if($dia>=2){   $tblFriend->displayAs("d02", "2");}
    if($dia>=3){ $tblFriend->displayAs("d03", "3");}
   if($dia>=4){  $tblFriend->displayAs("d04", "4");}
   if($dia>=5){  $tblFriend->displayAs("d05", "5");}
    if($dia>=6){ $tblFriend->displayAs("d06", "6");}
    if($dia>=7){ $tblFriend->displayAs("d07", "7");}
   if($dia>=8){  $tblFriend->displayAs("d08", "8");}
   if($dia>=9){  $tblFriend->displayAs("d09", "9");}
  if($dia>=10){   $tblFriend->displayAs("d10", "10");}
   if($dia>=11){  $tblFriend->displayAs("d11", "11");}
   if($dia>=12){  $tblFriend->displayAs("d12", "12");}
    if($dia>=13){ $tblFriend->displayAs("d13", "13");}
  if($dia>=14){   $tblFriend->displayAs("d14", "14");}
   if($dia>=15){  $tblFriend->displayAs("d15", "15");}
   
 $tblFriend-> omitField ("d16");
  $tblFriend-> omitField ("d17");
  $tblFriend-> omitField ("d18");
  $tblFriend-> omitField ("d19");
  $tblFriend-> omitField ("d20");
  $tblFriend-> omitField ("d21");
  $tblFriend-> omitField ("d22");
  $tblFriend-> omitField ("d23");
  $tblFriend-> omitField ("d24");
  $tblFriend-> omitField ("d25");
  $tblFriend-> omitField ("d26");
  $tblFriend-> omitField ("d27");
  $tblFriend-> omitField ("d28");
  $tblFriend-> omitField ("d29");
  $tblFriend-> omitField ("d30");
  $tblFriend-> omitField ("d31");  


  if(1>$dia){   
  $tblFriend->disallowEdit('d01');
  $tblFriend->disallowEdit('d02');
  $tblFriend->disallowEdit('d03');
  $tblFriend->disallowEdit('d04');
  $tblFriend->disallowEdit('d05');
  $tblFriend->disallowEdit('d06');
  $tblFriend->disallowEdit('d07');
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d01", "01");
  $tblFriend->displayAs("d02", "02");
  $tblFriend->displayAs("d03", "03");
  $tblFriend->displayAs("d04", "04");
  $tblFriend->displayAs("d05", "05");
  $tblFriend->displayAs("d06", "06");
  $tblFriend->displayAs("d07", "07");
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
 if(2>$dia){   
  $tblFriend->disallowEdit('d02');
  $tblFriend->disallowEdit('d03');
  $tblFriend->disallowEdit('d04');
  $tblFriend->disallowEdit('d05');
  $tblFriend->disallowEdit('d06');
  $tblFriend->disallowEdit('d07');
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d02", "02");
  $tblFriend->displayAs("d03", "03");
  $tblFriend->displayAs("d04", "04");
  $tblFriend->displayAs("d05", "05");
  $tblFriend->displayAs("d06", "06");
  $tblFriend->displayAs("d07", "07");
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(3>$dia){   
  $tblFriend->disallowEdit('d03');
  $tblFriend->disallowEdit('d04');
  $tblFriend->disallowEdit('d05');
  $tblFriend->disallowEdit('d06');
  $tblFriend->disallowEdit('d07');
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d03", "03");
  $tblFriend->displayAs("d04", "04");
  $tblFriend->displayAs("d05", "05");
  $tblFriend->displayAs("d06", "06");
  $tblFriend->displayAs("d07", "07");
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(4>$dia){   
  $tblFriend->disallowEdit('d04');
  $tblFriend->disallowEdit('d05');
  $tblFriend->disallowEdit('d06');
  $tblFriend->disallowEdit('d07');
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d04", "04");
  $tblFriend->displayAs("d05", "05");
  $tblFriend->displayAs("d06", "06");
  $tblFriend->displayAs("d07", "07");
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(5>$dia){   
  $tblFriend->disallowEdit('d05');
  $tblFriend->disallowEdit('d06');
  $tblFriend->disallowEdit('d07');
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d05", "05");
  $tblFriend->displayAs("d06", "06");
  $tblFriend->displayAs("d07", "07");
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(6>$dia){   
  $tblFriend->disallowEdit('d06');
  $tblFriend->disallowEdit('d07');
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d06", "06");
  $tblFriend->displayAs("d07", "07");
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(7>$dia){   
  $tblFriend->disallowEdit('d07');
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d07", "07");
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(8>$dia){   
  $tblFriend->disallowEdit('d08');
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d08", "08");
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(9>$dia){   
  $tblFriend->disallowEdit('d09');
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d09", "09");
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(10>$dia){   
  $tblFriend->disallowEdit('d10');
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d10", "10");
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(11>$dia){   
  $tblFriend->disallowEdit('d11');
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d11", "11");
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(12>$dia){   
  $tblFriend->disallowEdit('d12');
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d12", "12");
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(13>$dia){   
  $tblFriend->disallowEdit('d13');
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d13", "13");
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
    if(14>$dia){   
  $tblFriend->disallowEdit('d14');
  $tblFriend->disallowEdit('d15');
  $tblFriend->displayAs("d14", "14");
  $tblFriend->displayAs("d15", "15");
   } 
   
   

  }
   }
   

   if($dia>=16 and $dia<=31)
{

    if($dia>=16){ $tblFriend->displayAs("d16", "16");}
    if($dia>=17){ $tblFriend->displayAs("d17", "17");}
   if($dia>=18){  $tblFriend->displayAs("d18", "18");}
   if($dia>=19){  $tblFriend->displayAs("d19", "19");}
  if($dia>=20){   $tblFriend->displayAs("d20", "20");}
   if($dia>=21){  $tblFriend->displayAs("d21", "21");}
   if($dia>=22){  $tblFriend->displayAs("d22", "22");}
    if($dia>=23){ $tblFriend->displayAs("d23", "23");}
  if($dia>=24){   $tblFriend->displayAs("d24", "24");}
   if($dia>=25){  $tblFriend->displayAs("d25", "25");}
   if($dia>=26){  $tblFriend->displayAs("d26", "26");}
  if($dia>=27){   $tblFriend->displayAs("d27", "27");}
   if($dia>=28){  $tblFriend->displayAs("d28", "28");}
   if($dia>=29){  $tblFriend->displayAs("d29", "29");}
    if($dia>=30){ $tblFriend->displayAs("d30", "30");}
  if($dia==31){   $tblFriend->displayAs("d31", "31");}

  if(16>$dia){   
  $tblFriend->disallowEdit('d16');
  $tblFriend->disallowEdit('d17');
  $tblFriend->disallowEdit('d18');
  $tblFriend->disallowEdit('d19');
  $tblFriend->disallowEdit('d20');
  $tblFriend->disallowEdit('d21');
  $tblFriend->disallowEdit('d22');
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d16", "16");
  $tblFriend->displayAs("d17", "17");
  $tblFriend->displayAs("d18", "18");
  $tblFriend->displayAs("d19", "19");
  $tblFriend->displayAs("d20", "20");
  $tblFriend->displayAs("d21", "21");
  $tblFriend->displayAs("d22", "22");
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  } 

  if(17>$dia){   
  $tblFriend->disallowEdit('d17');
  $tblFriend->disallowEdit('d18');
  $tblFriend->disallowEdit('d19');
  $tblFriend->disallowEdit('d20');
  $tblFriend->disallowEdit('d21');
  $tblFriend->disallowEdit('d22');
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d17", "17");
  $tblFriend->displayAs("d18", "18");
  $tblFriend->displayAs("d19", "19");
  $tblFriend->displayAs("d20", "20");
  $tblFriend->displayAs("d21", "21");
  $tblFriend->displayAs("d22", "22");
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  } 
  if(18>$dia){   
  $tblFriend->disallowEdit('d18');
  $tblFriend->disallowEdit('d19');
  $tblFriend->disallowEdit('d20');
  $tblFriend->disallowEdit('d21');
  $tblFriend->disallowEdit('d22');
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d18", "18");
  $tblFriend->displayAs("d19", "19");
  $tblFriend->displayAs("d20", "20");
  $tblFriend->displayAs("d21", "21");
  $tblFriend->displayAs("d22", "22");
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  } 

  if(19>$dia){   
  $tblFriend->disallowEdit('d19');
  $tblFriend->disallowEdit('d20');
  $tblFriend->disallowEdit('d21');
  $tblFriend->disallowEdit('d22');
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d19", "19");
  $tblFriend->displayAs("d20", "20");
  $tblFriend->displayAs("d21", "21");
  $tblFriend->displayAs("d22", "22");
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  } 

  if(20>$dia){   
  $tblFriend->disallowEdit('d20');
  $tblFriend->disallowEdit('d21');
  $tblFriend->disallowEdit('d22');
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d20", "20");
  $tblFriend->displayAs("d21", "21");
  $tblFriend->displayAs("d22", "22");
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  } 
  
  if(21>$dia){   
  $tblFriend->disallowEdit('d21');
  $tblFriend->disallowEdit('d22');
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d21", "21");
  $tblFriend->displayAs("d22", "22");
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  } 

  if(22>$dia){   
  $tblFriend->disallowEdit('d22');
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d22", "22");
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  } 
  
  if(23>$dia){   
  $tblFriend->disallowEdit('d23');
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d23", "23");
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }
  if(24>$dia){   
  $tblFriend->disallowEdit('d24');
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d24", "24");
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }

  if(25>$dia){   
  $tblFriend->disallowEdit('d25');
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d25", "25");
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }
  if(26>$dia){   
  $tblFriend->disallowEdit('d26');
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d26", "26");
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }
  if(27>$dia){   
  $tblFriend->disallowEdit('d27');
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d27", "27");
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }
  if(28>$dia){   
  $tblFriend->disallowEdit('d28');
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d28", "28");
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }

  if(29>$dia){   
  $tblFriend->disallowEdit('d29');
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d29", "29");
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }
  
  if(30>$dia){   
  $tblFriend->disallowEdit('d30');
  $tblFriend->disallowEdit('d31');
  $tblFriend->displayAs("d30", "30");
   $tblFriend->displayAs("d31", "31");
  }

    if(31>$dia){   
  $tblFriend->disallowEdit('d31');	
   $tblFriend->displayAs("d31", "31");
  }
  

  if($numdias==28)
  {
     $tblFriend-> omitField ("d29");
     $tblFriend-> omitField ("d30");
     $tblFriend-> omitField ("d31");
  }
  if($numdias==29)
  {
  $tblFriend-> omitField ("d30");
     $tblFriend-> omitField ("d31");
  }
  if($numdias==30)
  {
     $tblFriend-> omitField ("d31");
  }

  
   $tblFriend-> omitField ("d01");
  $tblFriend-> omitField ("d02");
  $tblFriend-> omitField ("d03");
  $tblFriend-> omitField ("d04");
  $tblFriend-> omitField ("d05");
  $tblFriend-> omitField ("d06");
  $tblFriend-> omitField ("d07");
  $tblFriend-> omitField ("d08");
  $tblFriend-> omitField ("d09");
  $tblFriend-> omitField ("d10");
  $tblFriend-> omitField ("d11");
  $tblFriend-> omitField ("d12");
  $tblFriend-> omitField ("d13");
  $tblFriend-> omitField ("d14");
  $tblFriend-> omitField ("d15");
   }
   
   
   
   
   $tblFriend->displayAs("fecha", "Fecha");
   $tblFriend->displayAs("id_ruta", "Ruta");
   $tblFriend->displayAs("id_proveedor", "Proveedor");

   $tblFriend-> omitField ("id_leche");//para que no se vea el campo
 
  $tblFriend->modifyFieldWithClass("fecha", "datepicker");

  //$tblFriend->disallowEdit('fecha');
  $tblFriend->disallowEdit('fecha');
  $tblFriend->disallowEdit('id_ruta');
  $tblFriend->disallowEdit('id_proveedor');
/*
   $tblFriend-> disallowDelete (); //no permite la eliminacion
   $tblFriend-> omitField ("id_horario");//para que no se vea el campo
   $tblFriend-> omitField ("num");//para que no se vea el campo*/
$tblFriend-> disallowAdd ();//no permite anadir 
//$tblFriend->showOnly("nomasig");

$q=$id;
$tblFriend->defineRelationship("id_ruta", "ruta", "id_ruta",
"nombre_ruta","id_ruta",1);
$tblFriend->defineRelationship("id_proveedor", "proveedor", "id_proveedor",
"nombre_p","id_proveedor",1);
$tblFriend->addAjaxFilterBox('fecha');
$tblFriend->addAjaxFilterBox('id_proveedor');
$tblFriend->addAjaxFilterBox('id_ruta');

	#set the number of rows to display (per page)
    $tblFriend->setLimit(7);

    #set a filter box at the top of the table
  //  
	

	 // $c="matematica";
	#set allowable values for certain fields
	

	#show CSV export button
	//$tblFriend->showCSVExportOption();

	#use if you want to move the add form to the top of the page
	$tblFriend->displayAddFormTop();

	#order the table by any field you want
	$tblFriend->addOrderBy("ORDER BY id_leche");

//$tblFriend->addAjaxFilterBoxAllFields();


	$tblFriend->showTable();


?>

	</body>
</html>