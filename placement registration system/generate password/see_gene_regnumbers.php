<?php 
//session//
session_start();
 $regnumber=$_SESSION['regnumber'];
  
  



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css">
</head>

<body> 
<form class=" passform" method="post" action="passregeneration.php">
<center>
  Go Back
  <input type="submit" class="button" value="Back ">
</center><br>
<br>
<br>
<?php 
/*open the connection*/
	$connection = mysql_connect("localhost", "","") or die("Could not connect database");
	mysql_select_db("test", $connection) or die("Could not select database");
	 
	$result=mysql_query("select * from prsstudentdb")  or die("query failed").mysql_error;
	while($row=mysql_fetch_array($result))
	{
	 echo "reg. number   ".$row['regnumber']; ?> &nbsp;&nbsp; &nbsp; <?php echo "password    ".$row['password']; ?> &nbsp;&nbsp;&nbsp; <?php echo "username  ".$row['username'];
	  ?>
      <br /><br />
	  <?php 
	}
?>
</form>
</body>
</html>
