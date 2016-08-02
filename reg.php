<?php

	mysql_connect("localhost","esonance","eee.esonance") or die("connection error");
	mysql_select_db("esonance") or die("Database error");
	
	
	if(isset($_POST['table'])){
		
		$table =  $_POST['table'];
		$nayem = 0;
		
		$fetch = "SELECT * FROM idval where id=1";
		$not= mysql_query($fetch);
		while($row = mysql_fetch_array($not)){
			$num = $row['val'];
		}
		
		$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
	

		if($table == "robomania"){

			$name11 = $_POST['name11'];
			$id11 =  $_POST['id11'];
			$num1 = (int)$_POST['num1'];
			$id21 = $_POST['id21'];
			$cost1 = $num1*600;
			$team1 = $_POST['team1'];
			$ins1 = $_POST['ins1'];
			$contact1 = $_POST['contact1'];
			$email1 = $_POST['email1'];
			$id = 'URM'.$id;
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email1 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			
			
			$sql = "Insert into $table values ('$id','$name11','$id11','$num1','$id21','$team1','$ins1','$contact1','$email1')";
			
			$insert = mysql_query($sql) or die (mysql_error());
			
						if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email1;

	// Your subject
	$subject="URM Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for UNMANNED RESCUE MISSION  has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee".$cost1." BDT must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n


*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 
•	This is automatically generated mail. DO NOT reply to this mail \r\n
 \r\n";


	// send email
	$sentmail = mail($to,$subject,$message,$header);
}

}
			
			
		}
		
		
		if($table == "project"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name12 = $_POST['name12'];
			$id12 =  $_POST['id12'];
			$num2 = (int)$_POST['num2'];
			$id22 = $_POST['id22'];
			$cost2 = $num2*600;
			
			$project2 = $_POST['project2'];
			$team2 = $_POST['team2'];
			$ins2 = $_POST['ins2'];
			$contact2 = $_POST['contact2'];
			$email2 = $_POST['email2'];
			$typ2 = $_POST['typ2'];
		$id = "IB".$id;
  			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email2 ."' and typ = '$typ2'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			
			$sql = "Insert into $table values ('$id','$name12','$id12','$num2','$id22','$project2','$team2','$ins2','$typ2','$contact2','$email2')";
			
			$insert = mysql_query($sql) or die (mysql_error());
			
			if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email2;

	// Your subject
	$subject="Idea Blowing  Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for Idea Blowing Competition  has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee ".$cost2." BDT must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n


*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 
•	This is automatically generated mail. DO NOT reply to this mail \r\n
 \r\n";


	// send email
	$sentmail = mail($to,$subject,$message,$header);
}
}
		}
		
		
		if($table == "bcs"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name13 = $_POST['name13'];
			$id13 =  $_POST['id13'];
			$num3 = (int)$_POST['num3'];
			$id23 = $_POST['id23'];
			$cost3 = $num3*600;
			$team3 = $_POST['team3'];
			$ins3 = $_POST['ins3'];
			$contact3 = $_POST['contact3'];
			$email3 = $_POST['email3'];
			
			$id = 'IPC'.$id;
			
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email3 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
				
			$sql = "Insert into $table values ('$id','$name13','$id13','$num3','$id23','$team3','$ins3','$contact3','$email3')";
			
			$insert = mysql_query($sql) or die (mysql_error());
			
			
			if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email3;

	// Your subject
	$subject="Investor Pitch Challenge Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for Investor Pitch Challenge has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee ".$cost3." BDT must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n

*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 

•	This is automatically generated mail. DO NOT reply to this mail \r\n
 \r\n";


	// send email
	$sentmail = mail($to,$subject,$message,$header);
}

}
		}
		
		
		if($table == "poster"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name14 = $_POST['name14'];
			$id14 =  $_POST['id14'];
			$num4 = (int)$_POST['num4'];
			$id24 = $_POST['id24'];
			$cost4 = $num4*600;			
			$project4 = $_POST['project4'];
			$ins4 = $_POST['ins4'];
			$contact4 = $_POST['contact4'];
			$email4 = $_POST['email4'];
			$id = 'POS'.$id;
			
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email4 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			$sql = "Insert into $table values ('$id','$name14','$id14','$num4','$id24','$project4','$ins4','$contact4','$email4')";
			
			$insert = mysql_query($sql) or die (mysql_error());
			
						if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email4;

	// Your subject
	$subject="Poster Presentation Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for Poster Presentation has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee ".$cost4." BDT  must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n

*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 

•	This is automatically generated mail. DO NOT reply to this mail \r\n
 \r\n";


	// send email
	$sentmail = mail($to,$subject,$message,$header);
}

}
		}
		
		
		
		if($table == "quiz"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name10 = $_POST['name10'];
			$id10 =  $_POST['id10'];
				
			$ins10 = $_POST['ins10'];
	
			$contact10 = $_POST['contact10'];
			$email10 = $_POST['email10'];
			$id = 'QZ'.$id;
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email10 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			$sql = "Insert into $table values ('$id','$name10','$id10','$team10','$contact10','$email10')";
			
			$insert = mysql_query($sql) or die (mysql_error());
						if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email10;

	// Your subject
	$subject="Brain Teaser Competition Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for Brain Teaser Competition has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
Please go through the Rules & Regulations. 
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee 500 BDT  must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n


*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 

•	This is automatically generated mail. DO NOT reply to this mail \r\n
";




	// send email
	$sentmail = mail($to,$subject,$message,$header);
}
}
		}
		
		
		
		
		if($table == "rcube"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name15 = $_POST['name15'];
			$id15 =  $_POST['id15'];			
			$ins5 = $_POST['ins5'];
			$contact5 = $_POST['contact5'];
			$email5 = $_POST['email5'];
			$id = 'RC'.$id;
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email5 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			$sql = "Insert into $table values ('$id','$name15','$id15','$ins5','$contact5','$email5')";
			
			$insert = mysql_query($sql) or die (mysql_error());
						if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email5;

	// Your subject
	$subject="Rubics Cube Competition Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for Rubics Cube Competition has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
Please go through the Rules & Regulations. 
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee 500 BDT must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n

*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 

•	This is automatically generated mail. DO NOT reply to this mail \r\n
";




	// send email
	$sentmail = mail($to,$subject,$message,$header);
}
}
		}
		
		if($table == "matlab"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name16 = $_POST['name16'];
			$id16 =  $_POST['id16'];			
			$ins6 = $_POST['ins6'];
			$contact6 = $_POST['contact6'];
			$email6 = $_POST['email6'];
			$id = 'MAT'.$id;
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email6 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			$sql = "Insert into $table values ('$id','$name16','$id16','$ins6','$contact6','$email6')";
			
			$insert = mysql_query($sql) or die (mysql_error());
			if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email6;

	// Your subject
	$subject="Signal Processiong Challenge  Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for Signal Processiong Challenge  has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
Please go through the Rules & Regulations. 
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee 600 BDT must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n

*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 

•	This is automatically generated mail. DO NOT reply to this mail \r\n
";


	// send email
	$sentmail = mail($to,$subject,$message,$header);
}
}
		}
		
		
		if($table == "poster_iut"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name17 = $_POST['name17'];
			$id17 =  $_POST['id17'];
			$name27 = $_POST['name27'];
			$id27 =  $_POST['id27'];
			$name37 = $_POST['name37'];
			$id37 =  $_POST['id37'];
			$name47 = $_POST['name47'];
			$id47 =  $_POST['id47'];
			$project7 = $_POST['project7'];
			$ins7 = $_POST['ins7'];
			$contact7 = $_POST['contact7'];
			$email7 = $_POST['email7'];
			$id = 'IUT'.$id;
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email7 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			$sql = "Insert into $table values ('$id','$name17','$id17','$name27','$id27','$name37','$id37','$name47','$id47','$project7','$ins7','$contact7','$email7')";
			
			$insert = mysql_query($sql) or die (mysql_error());
			
			if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email7;

	// Your subject
	$subject="Poster presentation Final year";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message

	$message="Congratulations!!! Your registration for Poster Presentation  has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
Please go through the Rules & Regulations. 
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee 600 BDT must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 20503560200142615 \r\n
Islami Bank Bangladesh Limited. \r\n
Gazipur Sadar Branch. \r\n

*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 

•	This is automatically generated mail. DO NOT reply to this mail \r\n
";

	// send email
	$sentmail = mail($to,$subject,$message,$header);
}

			}
			
			
			
		}
		
		
		if($table == "event_kit"){
				$id = rand(1, 999);
		$get_id = mysql_query("SELECT * FROM $table WHERE id = '$id'");
		if(mysql_num_rows($get_id)>0){
			$id = rand(1,999);			
		}
  			
			$name18 = $_POST['name18'];
			$occupation8 =  $_POST['occupation8'];			
			$ins8 = $_POST['ins8'];
			$contact8 = $_POST['contact8'];
			$email8 = $_POST['email8'];
			$id = 'KIT'.$id;
			
			$y = mysql_query("SELECT * FROM $table  WHERE email = '". $email8 ."'");

			if (mysql_num_rows($y) > 0)
            {
				$nayem = 1;
			}
			
			else{
			$sql = "Insert into $table values ('$id','$name18','$occupation8','$ins8','$contact8','$email8')";
			
			$insert = mysql_query($sql) or die (mysql_error());
			
			
			if($insert){
	// ---------------- SEND MAIL FORM ----------------

	// send e-mail to ...
	$to=$email8;

	// Your subject
	$subject="Event Kit Automail";

	// From
	$header="from: ESONANCE <ESONANCE.registration@iut-dhaka.edu>";

	// Your message
	$message="Congratulations!!! Your registration for Event Kit has been initiated. \r\n
You are just two steps away from completing your registration for ESONANCE 2015!!\r\n
Your Unique #ID: '$id'.
";
$message.="Please go through the Rules & Regulations. \r\n
Your registration will be completed if you finish the following steps:\r\n
1.	Registration fee 500 BDT must be deposited on or before the last date of registration to any of the following accounts\r\n

a)Account name: Md Rezaul Hoque Khan \r\n
Account no.: 1426\r\n
Islami Bank Bangladesh Limited.\r\n
Gazipur Sadar Branch.\r\n

*Note: The transaction fee (if any) should be paid by the sender.\r\n\r\n


	


2.	Scan the deposit slip and send the scan copy of the slip to the following email ESONANCE.registration@iut-dhaka.edu\r\n 
(You must submit the original deposit slip on the event day.)\r\n 
The subject of the email should be in the following form:\r\n 
Subject: Event Name_Participant name_Unique ID.\r\n 
(For Team participants, the team leader’s name should be mentioned)\r\n 
The mail should also include the date of on-line registration. \r\n 
That’s all. You will receive a confirmation email within 48 hours from ESONANCE registration committee.\r\n 
Hope to see you on 11 September 2015 in IUT.\r\n \r\n 
Thanking you, ESONANCE2015 Organizing Committee. \r\n \r\n 
#Notes:\r\n 
•	If you face any difficulty in terms of transactions, please feel free to contact us through ESONANCE.registration@iut-dhaka.edu\r\n 
The subject of the email should be in the following form:\r\n 
	Subject: Event Name_Unique ID_Transaction Difficulty \r\n 
•	For any further queries on the events, contact us at ESONANCE.info@iut-dhaka.edu\r\n 

•	This is automatically generated mail. DO NOT reply to this mail \r\n
 \r\n";


	// send email
	$sentmail = mail($to,$subject,$message,$header);
}

}
			
			
		}
		
		$ql = "UPDATE idval SET val = $num +1 WHERE id=1";
		$in = mysql_query($ql) or die (mysql_error());
			
}

?>













<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>ESONANCE | Registration</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/headers/header1.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="assets/css/style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css" />
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" href="assets/css/themes/headers/default.css" id="style_color-header-1" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head> 

<body>
<!--=== Style Switcher ===-->    
 

<?php include 'header.php' ; ?>

<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">Registration</h1>
        
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
    <!-- Search Result -->
    <div class="row-fluid search-page">

        <?php if($nayem ==1){ ?>
        <div class="alert alert-danger alert-block">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <h4>Attention !!</h4><br />
            You have already registered this event with given email. <br>
            Contact ESONANCE.info@iut-dhaka.edu for further details. <br>
            Thank you. 
        </div>
        
        <?php }
else { ?>
        <div class="alert alert-info alert-block">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <h4>Congratulation !!</h4><br />
            Your registration has been Completed. <br>
            A confirmation mail has been sent to your given email address with further details. <br>
            Dont forget to check your Spambox. <br>
            Your ESONANCE ID is <?php echo $id;?>. Keep it safe for further use. <br />
            Thank you. 
        </div>        

       <?php } ?>

        
        
        
        
        
    </div><!--/row-fluid-->
    <!-- //End Search Result -->
</div><!--/container-->		
<!--=== End Content Part ===-->



<?php include 'footer.php' ; ?>

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>        
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/js/respond.js"></script>
<![endif]-->

</body>
</html> 