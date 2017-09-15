<html>
<head>
<title>PHPMailer - SMTP (Gmail) basic test</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="../../index.php" name="home"  class="passform" >
<input type="submit" class="button" value="back to home page" >
</form>

<?php
$regnumber=$_POST['regnumber'];
		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		
		//search wheather the given renumber is existing or not//
		$query_for_existance="select `recruiter_id` from prsrecruiter";
		$result_for_existance=mysql_query($query_for_existance)
		or die("query failed :". mysql_error());
		$flag=0;
		while($row_for_existance=mysql_fetch_array($result_for_existance))
		{
			if($regnumber==$row_for_existance['recruiter_id'])
			{
				$flag=1;
			}
			
		}
		echo $flag;
		if($flag==0)
		{
			echo "the recruiter id  does not exist";exit;
		}
		
		
		//fetching the email and other details//
		$query="select *from  prsrecruiter where `recruiter_id`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		$row=mysql_fetch_array($result);
		echo $email=$row['email'];
		echo  $name= "Recruiter";
		echo  $password=$row['password'];
//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('./class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "hello ".$name. " Your password is ".$password;					//Message Body..............................

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

$mail->Subject    = "PASSWORD REQUEST MAIL";							//Subject.................

$mail->MsgHTML($body);

$address = $email;
$mail->AddAddress($address, "slam");



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "email is  sent!";
}

?>

</body>
</html>
