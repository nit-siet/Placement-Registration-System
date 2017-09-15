<?php 

	 //session//
	 session_start();
	 $regnumber=$_SESSION['regnumber'];

	 $name=$_POST['name'];
	 $roll=$_POST['rolnumber'];
	 $branch =$_POST['branch'];
	 $semester=$_POST['semester'];
	  $email=$_POST['email'];
	 $presentaddress=$_POST['presentaddress'];
	 $permanentaddress=$_POST['permanetaddress'];
     $pptstud=$_POST['pptclass'];
	 $yrgap=$_POST['yeargap'];
	 $marks10=$_POST['mark10'];
	 $marks12=$_POST['mark12'];
	 
	 $marks_1_sem=$_POST['sem1'];
	 $countsemester=0;
	 if($marks_1_sem=="")
	 	{
			$marks_1_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	 $marks_2_sem=$_POST['sem2'];
	  if($marks_2_sem=="")
	 	{
			$marks_2_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	 $marks_3_sem=$_POST['sem3'];
	  if($marks_3_sem=="")
	 	{
			$marks_3_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	 $marks_4_sem=$_POST['sem4'];
	  if($marks_4_sem=="")
	 	{
			$marks_4_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	 $marks_5_sem=$_POST['sem5'];
	  if($marks_5_sem=="")
	 	{
			$marks_5_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	 $marks_6_sem=$_POST['sem6'];
	  if($marks_6_sem=="")
	 	{
			$marks_6_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	 $marks_7_sem=$_POST['sem7'];
	  if($marks_7_sem=="")
	 	{
			$marks_7_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	 $marks_8_sem=$_POST['sem8'];
	  if($marks_8_sem=="")
	 	{
			$marks_8_sem=0;
		}
	else
		{
			$countsemester=$countsemester+1;
		}
	
	if($countsemester!=0)
	{
	 $cgpa=($marks_1_sem+$marks_2_sem+$marks_3_sem+$marks_4_sem+$marks_5_sem+$marks_6_sem+$marks_7_sem+$marks_8_sem)/$countsemester;
	 }
	 else
	 {
	 	$cgpa=0;
	 }
	 $mob_no=$_POST['mobile'];
	 $hom_no=$_POST['homenumber'];
	 $alt_no=$_POST['altnumber'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php

	$connection = mysql_connect("localhost", "","") or die("Could not connect database");
	mysql_select_db("test", $connection) or die("Could not select database");


	$sql =  "UPDATE prsstudentdb SET name ='$name',roll='$roll',branch='$branch',semester='$semester',
	email='$email',presentaddress='$presentaddress',
	permanentaddress='$permanentaddress',reg_status='1',pptstud ='$pptstud',yrgap='$yrgap',
	marks10=$marks10,marks12=$marks12,marks_1_sem=$marks_1_sem,
	marks_2_sem=$marks_2_sem,
	marks_3_sem=$marks_3_sem,marks_4_sem =$marks_4_sem,
	marks_5_sem=$marks_5_sem,marks_6_sem =$marks_6_sem,marks_7_sem= $marks_7_sem ,marks_8_sem=$marks_8_sem   
	,cgpa=$cgpa,mob_no=$mob_no,hom_no=$hom_no,alt_no=$alt_no 
	 WHERE regnumber = '$regnumber'";
	mysql_query( $sql) or die("query failed " .mysql_error());
	
	mysql_close($connection);
	echo "successfully done ";

	?>
    <form class="passform" name="form1" action="../userpages/studentpage.php" method="post">
    continue to your account <br />
    <center><input name="submitreg_number" type="submit" class="button" value="Continue" />
    <center>
    </form>

</body>
</html>

