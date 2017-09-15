<?php
//session//
session_start();
$regnumber=$_SESSION['regnumber'];

//getting text from last page //
 $from=$_POST['regfrom'];
 $to=$_POST['regto'];   
	   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>

<body class="passform">
<?php
	/*open the connection*/
	$connection = mysql_connect("localhost", "","") or die("Could not connect database");
	mysql_select_db("test", $connection) or die("Could not select database");
	
	$result=mysql_query("select `regnumber` from prsstudentdb");
	
	
	
	
	$duplicate=0;	
	while($row=mysql_fetch_array($result))
		{
			for($i=$from; $i<=$to; $i++)
			{			
				if($row['regnumber']==$i)
				
				{
				echo $i;?> <br /> <?php		
				$duplicate=1;
				}
			}
			
			
		}

	
	
	if($duplicate==1)
	{
	?> <br /> <?php
	echo "The above registration number is duplicating. ";
	echo "The username and password for the registration number provided are already generated .so check the registration numbers you have provided or see the registration number that is been allocated username and password "
			?>
            
<form class="method="post" name="see" action="see_gene_regnumbers.php">
            <input type="submit" value="see" />
</form>
           <form method="post" action="passregeneration.php">
           or go back to the generate page
           <input type="submit" value="back"  />
           </form>
           <?php
	}
            
	
	else
{	echo "there is no any duplicate registration number provided and the generation process is sucessful";
	for($i=$from; $i<=$to; $i++)
	{
		/*generate random username*/
			$chars="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   		 	$charArray = str_split($chars);
			$username="";
			$password="";
       		for($j =0;$j<5;$j++)
 	   		{ $randItem = array_rand($charArray);
			 $username.=$charArray[$randItem];
			}
		/*generate password*/ 		
			$chars2="abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 			$charArray2 = str_split($chars2);
 			for($k=0;$k<8;$k++)
 			{$randItem = array_rand($charArray2);
			 $password.=$charArray2[$randItem];
			}
			
			
		mysql_query("INSERT INTO prsstudentdb(regnumber,username,password)VALUES('$i','$username','$password')")  or die("query failed").mysql_error;
	}
}	 
?>
<form action="see_gene_regnumbers.php" method="post" >
</form>
</body>
</html>
