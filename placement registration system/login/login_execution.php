<?php 
$user=$_POST['user'];
$reg_number=$_POST['reg_number'];
$username=$_POST['username'];
$password=$_POST['password'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placement Registration System</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 
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
		
		
				?><form class="passform" name="goto_admin" method="post" action="../userpages/admin_page.php">
					
                    <center><input type="submit" class="button" value="continue" />
  </center>
               	  </form>
                 <?php
		}		 
	else
		{
		echo "your user name is not verified login again ";
		?>
        <form class="passform" name="go to login" method="post" action="prslogin.php"><center>
        <center><input type="submit" class="button" value="Login Again" /></center>
        <center>
        </form> 
        <?php
        
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
		
				?>
                <form class="passform" name="regnum" method="post" action="../registration form/reg form.php" >
                <div class="passform"><BR /><BR /><BR /><BR />
				<center><input type="submit" class="button" value="continue" />
				</center>
                <br /><br /><br /><br />
                </div>
               	  </form>
                 <?php
				}
			 else{
			 	?> <center><?php echo "YOU ARE A REGISTERED USER SO GOTO USER PAGE";?></center><?php 
				
				//session//
				echo "session  start";
		session_start();
		$_SESSION['regnumber']="$reg_number";
		
		
				?><form  class="passform" name="regnum" method="post" action="../userpages/studentpage.php">
					
                    <center><input type="submit" class="button" value="continue" />
                    </center>
               	  </form>
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
					
					
					?>
					<form class="passform" name="regnum" method="post" action="../userpages/recruiter_page.php">
					
                   <center> <input type="submit" class="button" value="contineue" />
                   </center>
               	  </form>
					<?php
                 
				}
			else
				{ 
				echo "you are not a verified Recruiter please login again";
				?> 
				<form class="passform" name="sent to login" action="prslogin.php" method="post">
				<center><input type="submit" class="button" value="again login"	 />
				</center>
				</form>
				<?php
				}
			}
		else
		{
			echo "You are not a approved recruiter.Please wait for your approval and try to login later Thank !!!";
			?> 
				<form class="passform" name="sent to login" action="prslogin.php" method="post">
				<center><input type="submit" class="button" value="again login"	 />
				</center>
				</form>
				<?php
		}
}

?>


</body>
</html>
