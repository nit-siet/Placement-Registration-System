
<html>
<head>
<title>PLACEMENT REGISTRATION SYSTEM</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
  
 <form name="back" action="placement registration system/forgetpassword.php" >
 <input type="submit" class="button"name="submit" value="BACK" >
 </form>

<?php
echo  $regnumber=$_POST['regnumber'];
echo  $user=$_POST['user'];


if ($user="student")
		{echo "u r student";
		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsstudentdb where `regnumber`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		$row=mysql_fetch_array($result);
		 echo $email=$row['email'];
		 echo $name=$row['name'];
		 echo $password=$row['password']; 
		} 

else if($user="adminstrator")
		{ echo "u r administrator ";
		/*$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsadmindb where `admin_id`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		$row=mysql_fetch_array($result);
		echo  $email=$row['email'];
		echo  $name= "administrator";
		echo  $password=$row['password']; */	
		}

else if($user="recruiter")	
	
		{echo  "u r a recruiter";	
		/*$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsrecruiter where `recruiter_id`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		$row=mysql_fetch_array($result);
		 echo $email=$row['email'];
		echo  $name= "Recruiter";
		echo  $password=$row['password'];*/
 		}






//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('placement registration system/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

 echo $body             = "PASSWORD REQUEST MAIL"."<br>"."Hello ".$name." your requested password is ".$password;					//Message Body..............................

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "nit.siet@gmail.com";  // GMAIL username
$mail->Password   = "niteshkumar";            // GMAIL password

$mail->SetFrom('nit.siet@gmail.com', 'PLACEMENT DEPARTMENT');			// From address
	
$mail->AddReplyTo("nit.siet@gmail.com","PLACEMENT DEPARTMENT");		//Reply Address

$mail->Subject    = "PASSWORD REQUEST ";						//Subject.................

$mail->MsgHTML($body);
echo $email;
$address = $email;
$mail->AddAddress($address, "slam");



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>




