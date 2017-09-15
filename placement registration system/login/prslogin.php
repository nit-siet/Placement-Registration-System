<?php $year=date("y");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
function form_validation()
{
var a=document.forms["login"]["reg_number"].value;
var num = /^[0-9]+$/; 
if(a==null || a=="" || a!=a.match(num))
	{
	alert("Enter the registration number and it should be numeric value");
	return false;
	}
	

	
	
var b=document.forms["login"]["username"].value;
var usname = /^[0-9a-zA-Z]+$/; 
if(b==null || b=="" || b!=b.match(usname) )
	{
	alert("Enter the user name and it should be a alpha numeric value ");
	return false;
	}


var c=document.forms["login"]["password"].value;
var pass = /^[0-9a-zA-Z]+$/; 
var	len=a.length;
if(c==null || c==""|| c!=c.match(pass) || c.length<8)
	{
	alert("Enter the password it should be alphanumeric and not less than 8 characters ");
	return false;
	}


}
	
		
</script>

<body class="bodydiv"> 
        <div class="headdiv" >
      <table width="878" height="141">
<tr> 
      			<td width="754">PLACEMENT REGISTRATION SYSTEM  </td>
   	  <td width="112" class="small">SIET   </td>
        <tr>   
       </table>      
</div>
<div id="menudiv" class="menu">
  	  <table width="1033" border="0" cellspacing="2" cellpadding="2">
	    <tr>
  		 <strong>
          <td width="126"><a href="../../index.php"><img src="../image/Home-icon.png" alt="home" class="icon" />HOME</a></td>
  		  </strong><td width="326" nowrap="nowrap"><p><strong><a href="../send emaill/forgetpassword.php"><img src="../image/[006422].png" alt="forget ps" class="icon" />FORGET PASSWORD</a></strong><a href="forgetpassword.php"><strong> </strong></a> </strong></p>
	        </td>
  		  <strong>
  		  <td width="132" nowrap="nowrap">&nbsp;</td>
  		  <td width="144"><strong><a href="../userpages/help.php"><img src="../image/iHelp-icon.jpg" alt="help" width="512" height="529" class="icon" />HELP</a></strong></td>
          </strong><td width="273" widht="66"><p><strong><a href="../userpages/recruiter_request.php"><img src="../image/57992.png" width="300" height="408" class="icon" />RECRUITER REQUEST</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >
    	
   		 <form class="only_border"action="prslogin.php" name="login" method="post" onsubmit="return form_validation()" >
         <div id="middlebody">
         	<div class="caption">
   		 LOGIN
         	<img class="icon" src="../image/[016457].png"  /></div>
   		 <table  border="0" cellpadding="2" cellspacing="2">
 		 <tr>
    	<td width="574">SELECT YOUR USERS &nbsp;</td>
    	<td width="325">
        	<select name="user">
    		<option value="student">student</option>
            <option value="administrator">administrator</option>
            <option value="recruiter">recruiter</option>
    		</select>
            &nbsp;</td>
  		</tr>
  		 <tr>
  		   <td>REG. NUMBER/ RECRUITER ID/ADMIN ID</td>
  		   <td><INPUT type="text" name="reg_number" autocomplete="off" />&nbsp;</td>
		   </tr>
  		 <tr>
    	<td> USER NAME &nbsp;</td>
    	<td><input type="text" name="username" id="username" />&nbsp;</td>
  	</tr>
  	<tr>
    	<td> PASSWORD&nbsp;</td>
    	<td><input  type="password" name="password" id="password" />&nbsp;</td>
  	</tr>
	</table>
    	 <input class="button" name="submit" type="submit" id="submit" value="login" />
         
    		
        </div>
    	</form>
		
     </div>
<?php 
if(isset($_POST['submit']))
{ 
$user=$_POST['user'];
$reg_number=$_POST['reg_number'];
$username=$_POST['username'];
$password=$_POST['password'];	

if($user=="administrator")
{

/*creat connection */
	$connection = mysql_connect("localhost","","") or die("Could not connect database").mysql_error();
	mysql_select_db("test", $connection) or die("Could not select database");
	/*do query for the particular registartion number*/
	$query= mysql_query("SELECT * FROM `prsadmindb` WHERE `admin_id`=$reg_number");
	
	/*store it into the array having the all elements of the row*/
	$row=mysql_fetch_array($query);
	if($username==$row['username'] && $password==$row['password'])
		{
		echo "go to adminpage";
		
		session_start();
		$_SESSION['regnumber']="$reg_number";
		header ("location:http://localhost/new/placement%20registration%20system/userpages/admin_page.php");
		
				
		}		 
	else
		{
		?><h1><?php echo "your user name is not verified login again ";?></h1><?php 
		}			 
}

else if($user=="student")
{
	/*creat connection */
	$connection = mysql_connect("localhost", "","") or die("Could not connect database");
	mysql_select_db("test", $connection) or die("Could not select database");
	/*do query for the particular registartion number*/
	$query= mysql_query("SELECT * FROM `prsstudentdb` WHERE `regnumber`=$reg_number");
	
	/*store it into the array having the all elements of the row*/
	$row=mysql_fetch_array($query);
	/*now compare the user name and password*/ 
		$queryusername=$row['username'];
		$querypassword=$row['password'];
		$reg_status=$row['reg_status'];
		
	if($queryusername==$username && $querypassword==$password)
			{ 
			 if ($reg_status==0)
	 			{
				?> <center><?php echo "YOU ARE NOT A REGISTERD USER SO RGISTER FIRST"; ?></center><?php
				
				//session//
				
		session_start();
		$_SESSION['regnumber']="$reg_number";
		header("location:http://localhost/new/placement%20registration%20system/registration%20form/reg%20form.php");
		
				?> 
                 <?php
				}
			 else{
			 	?> <center><?php echo "YOU ARE A REGISTERED USER SO GOTO USER PAGE";?><?php 
				
				//session//
				echo "session  start";
		session_start();
		$_SESSION['regnumber']="$reg_number";
		header("location:http://localhost/new/placement%20registration%20system/userpages/studentpage.php");
		
		
				?>
                 <?php
	 			}
	 		}
			
	else
			{
			?> <h2> your account not verified </h2> access is de3nied !!!!!!!  dont try to cheat !!!!!!<?php 
 			}
	
}

else if($user=="recruiter")
{
echo "you are recruiter";

/* create connection */
				$connection = mysql_connect("localhost", "","") or die("Could not connect database");
				mysql_select_db("test", $connection) or die("Could not select database");
				/*do query for the particular registartion number*/
				$query= mysql_query("SELECT * FROM `prsrecruiter` WHERE `recruiter_id`=$reg_number");
	
				/*store it into the array having the all elements of the row*/
				$row=mysql_fetch_array($query);
		if($row['approve_status']==1)
 			{
			if($username==$row['username'] && $password==$row['password'])
				{
					//session//
				echo "session  start";
				session_start();
				$_SESSION['regnumber']="$reg_number";
				echo $_SESSION['regnumber'];
				header("location:http://localhost/new/placement%20registration%20system/userpages/recruiter_page.php");	
					
					?>
					
					<?php
                 
				}
			else
				{ 
				?> <h2> <?php echo "you are not a verified Recruiter please login again"; ?> </h2> <?php 
				
				}
			}
		else
		{
			?><h2><?php echo "You are not a approved recruiter.Please wait for your approval and try to login later Thank !!!"; ?> </h2><?php
			
		}
}

}
?>     
   
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>    </div>
</div> 
      
</body>

</html>
