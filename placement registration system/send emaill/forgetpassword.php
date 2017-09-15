<?php $year=date("y");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>

<body class="bodydiv"> 
        <div class="headdiv" >
      <table width="728" height="141">
<tr> 
      			<td width="657">PLACEMENT REGISTRATION SYSTEM  </td>
   	  <td width="37" class="small">SIET   </td>
        <tr>   
       </table>      
</div>
		<div id="menudiv" class="menu">
  	  <table width="1033" border="0" cellspacing="2" cellpadding="2">
	    <tr>
  		 <strong>
          <td width="126"><a href="../../index.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="../userpages/help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="130" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="144">&nbsp;</td>
          </strong><td width="273" widht="66"><p>&nbsp;</p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >
    <div class="only_border">
    <?php
	if(isset($_POST['student_submit']))
{
		$regnumber=$_POST['regnumber'];
	echo "u r a student";
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
//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('placement registration system/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "PASSWORD REQUEST MAIL"."<br>"."Hello ".$name." your requested password is ".$password;					//Message Body..............................

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

}

if(isset($_POST['admin_submit']))
{
		$regnumber=$_POST['regnumber'];
	echo"u r a admin";
	$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsadmindb where `admin_id`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		$row=mysql_fetch_array($result);
		echo  $email=$row['email'];
		echo  $name= "administrator";
		echo  $password=$row['password'];
		
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

}
 if(isset($_POST['recruiter_submit']))
 {
 		$regnumber=$_POST['regnumber'];
 	echo "u r recruiter ";
	$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
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

 }
	?>
    	
   		 
         <div id="middlebody">
         	<div class="caption">FORGET PASSWORD<img src="../image/index.jpg" alt="email your password" class="icon"/></div>
            
	       <form action="student_email.php" method="post" name="student">
            <u>FOR STUDENTS </u><br />
            <table width="829">
            <tr><td width="519">
            <br />
            
            ENTER THE REGISTRATION NUMBER</td>
            <td width="187"><input type="text" name="regnumber" onblur="" />
            </td>
            <td width="107"><input name="student_submit" type="submit" class="button" value="SEND EMAIL" />
            </td></tr>
            </table>
            
            
            </form ><br /> <br /><br />
            
            <form name="administrator" action="admin_email.php" method="post">
            <u>FOR ADMINISTRATOR</u><br /><br />
            
             <table>
            <tr><td width="518">
            ENTER THE ADMIN ID</td>
            <td width="199"><input type="text" name="regnumber" onblur="" /></td>
            <td width="101"><input name="admin_submit" type="submit" class="button"  value="SEND EMAIL"/>
            </td></tr>
            </table>
            </form>
            <br /><br />
            
            <form name="recruiter" action="recruiter_mail.php" method="post">
             <p><u>FOR RECRUITER</u><br />
             </p>
             <table><tr>
             <td width="518">
             ENTER THE RECRUITER ID </td>
             <td width="199"><input type="text" name="regnumber" onblur="" /></td> <td width="97">
             <input name="recruiter_submit" type="submit" class="button" value="SEND EMAIL" /></td></tr>
             </table>
             </form><br /> <br /><br /> 
            
            
    	 </div>
    	
	</div>	
     </div>
   	<div id="footerdiv" class="footer">
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>
     </div>
 	</div> 
      
</body>

</html>
