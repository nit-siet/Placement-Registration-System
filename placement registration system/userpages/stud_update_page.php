
<?php
/*student view your detail and update */
//tiem//
 $year=date("y");
 
 //session//
 session_start();
 $regnumber=$_SESSION['regnumber'];
$name=$_SESSION['name'];
$roll=$_SESSION['roll'];
if($regnumber=="")
{
header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
}



    
//student all details are fatched in text box mode  for updation just when the page is loaded//	  
		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsstudentdb where `regnumber`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		
		
		
	 	$row=mysql_fetch_array($result); 
		$roll=$row['roll'];
		$branch=$row['branch'];
		$semester=$row['semester'];
		$username =$row['username'];
		$email =$row['email'];
		$presentaddress=$row['presentaddress']	;	
		$permanentaddress=$row['permanentaddress'];
		$pptstud =$row['pptstud'];
		$yrgap =$row['yrgap'];
		$marks10=$row['marks10'];
		$marks12 =$row['marks12'];
		
		$marks_1_sem=$row['marks_1_sem'];
		$marks_2_sem =$row['marks_2_sem'];
		$marks_3_sem =$row['marks_3_sem'];
		$marks_4_sem =$row['marks_4_sem'];
		$marks_5_sem =$row['marks_5_sem'];
		$marks_6_sem =$row['marks_6_sem'];
		$marks_7_sem =$row['marks_7_sem'];
		$marks_8_sem =$row['marks_8_sem'];
		$cgpa=$row['cgpa'];
		$mob_no=	$row['mob_no'];
		$hom_no=$row['hom_no'];
		$alt_no=$row['alt_no'];
		$password=$row['password'];
		
		
		mysql_close($connection);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" language="javascript">
function validateForm()
	{ 
	 var  name=document.forms["regform"]['name'].value;
	 var nm = /^[a-zA-Z ]+$/;
	 if (name==null || name==""|| name!=name.match(nm))
	  {
	  alert("First name must be filled out and it should  have only albhabets");
	  return false;
	  } 
	  
	var  roll=document.forms["regform"]['roll'].value;
	if (roll==null || roll=="")
	  {
	  alert("Roll Number  must be filled out");
  return false;
	  }
		//semester validation 
	   var semester =document.forms["regform"]['semester'].value;
	    var valid_sem = /^[0-8 ]+$/;
		if(semester==null || semester==""||semester!=semester.match(valid_sem))
		{
			alert("the semester should be from 1 to 8 only ");
			return false;
		}
	
	  var  username=document.forms["regform"]['username'].value;
	  var valid_us = /^[0-9a-zA-Z ]+$/;
	  if(username==null||username==""||username!=username.match(valid_us)||username.length<5)
	  {
	  		alert("username should filled/atlest 5 characters/alphanumeric character ");
			return false;
	  }
	  
	  var b=document.forms["regform"]["password"].value;

if(b==null || b=="" || b.length<8)
	{
	alert("new password must be filled out and it should not be less than 8 characters ");
	return false;
	}	
	  
	  var  presentaddress=document.forms["regform"]['presentaddress'].value;
	  var valid_add = /^[0-9a-zA-Z ]+$/;
	  	 if ( presentaddress==null ||  presentaddress==""|| presentaddress!=presentaddress.match(valid_add))
	  {
	  alert("present address must be filled out/it should have only alphanumeric characters");
	  return false;
	  }

	 var  permanentaddress=document.forms["regform"]['permanentaddress'].value;
	 var  valid_add1 = /^[0-9a-zA-Z ]+$/;
	 	if (permanentaddress==null || permanentaddress==""|| permanentaddress!=permanentaddress.match(valid_add1))
	  {
	  alert("permanent address must be filled out/it should have only alphanumeric characters");
	  return false;
	  }
	  
	
	  

	var x=document.forms["regform"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	 {
  	alert("Not a valid e-mail address");
  	return false;
  	 }


	 var  marks10=document.forms["regform"]['marks10'].value;
	
	 var num1 = /^[0-9.]+$/; 
	  if (marks10==null || marks10==""||marks10!=marks10.match(num1)|| marks10>100)
	  {
	  alert("10 marks must be filled out/give numeric value only");
	  return false;
	  } 
	
	var  marks12=document.forms["regform"]['marks12'].value;
	  var num2 = /^[0-9.]+$/; 
	  if (marks12==null || marks12==""|| marks12!=marks12.match(num2) || marks12>100)
	  {
	  alert("12 marks must be filled out/give numeric value only");
	  return false;
	  }
	   
    var  sem1=document.forms["regform"]['marks_1_sem'].value;
	if(sem1!="")
	{
		var num = /^[0-9.]+$/;
		if(sem1>10||sem1!=sem1.match(num))
			{
				alert("1 st sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	
	var  sem2=document.forms["regform"]['marks_2_sem'].value;
	if(sem2!="")
	{
		var num = /^[0-9.]+$/;
		if(sem2>10||sem2!=sem2.match(num))
			{
				alert("2 nd sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem3=document.forms["regform"]['marks_3_sem'].value;
	if(sem3!="")
	{
		var num = /^[0-9.]+$/;
		if(sem3>10||sem3!=sem3.match(num))
			{
				alert("3 rd sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem4=document.forms["regform"]['marks_4_sem'].value;
	if(sem4!="")
	{
		var num = /^[0-9.]+$/;
		if(sem4>10||sem4!=sem4.match(num))
			{
				alert("4 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}	
	var  sem5=document.forms["regform"]['marks_5_sem'].value;
	if(sem5!="")
	{
		var num = /^[0-9.]+$/;
		if(sem5>10||sem5!=sem5.match(num))
			{
				alert("5 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem6=document.forms["regform"]['marks_6_sem'].value;
	if(sem6!="")
	{
		var num = /^[0-9.]+$/;
		if(sem6>10||sem6!=sem6.match(num))
			{
				alert("6 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem7=document.forms["regform"]['marks_7_sem'].value;
	if(sem7!="")
	{
		var num = /^[0-9.]+$/;
		if(sem7>10||sem7!=sem7.match(num))
			{
				alert("7 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem8=document.forms["regform"]['marks_8_sem'].value;
	if(sem8!="")
	{
		var num = /^[0-9]+$/;
		if(sem8>10||sem8!=sem8.match(num))
			{
				alert("8 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	 	
	
	
	 var  mob_no=document.forms["regform"]['mob_no'].value;
	 var mob = /^[0-9]+$/; 
	 
	  if (mob_no==null || mob_no==""|| mob_no.length!=10|| mob_no!=mob_no.match(mob))
	  {
	  alert("mobile number  must be filled out and should be of 10 characters");
	  return false;
	  }
	  
	 var  hom_no=document.forms["regform"]['hom_no'].value;
	  var hom = /^[0-9]+$/; 
	   if (hom_no==null || hom_no==""||hom_no!=hom_no.match(hom)||hom_no.length!=10)
	  {
	  alert("home number  must be filled out in 10 characters");
	  return false;
	  }
	 var  alt_no=document.forms["regform"]['alt_no'].value;
	 var alt = /^[0-9]+$/;
	   if (alt_no==null || alt_no==""||alt_no!=alt_no.match(alt)||alt_no.length!=10)
	  {
	  alert("alternate number  must be filled out in 10 characters ");
	  return false;
	  } 
		
	}
	</script>


<body class="bodydiv"> 
        <div class="headdiv" >
      		<table width="728" height="141">
			<tr> 
      			<td width="657">PLACEMENT REGISTRATION SYSTEM  </td>
   	  			<td width="29" class="small">SIET   </td>
       	    <tr>   
     		 </table>      
        </div>
<div id="menudiv" class="menu">
  	  <table width="1033" border="0" cellspacing="2" cellpadding="2">
	    <tr>
  		 <strong>
          <td width="126"><a href="studentpage.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="130" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="88">&nbsp;</td>
          </strong><td width="273" widht="66"><p><strong><a href="logout.php" ><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
<div class="middlebody" >
    	
<div class="only_border">
       <div id="middlebody"><?php
         //when the update button is pressed//
if(isset($_POST['update']))
{	
	 $reg=$_SESSION['regnumber'];
		$name=$_POST['name'];
		$roll=$_POST['roll'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
		$username =$_POST['username'];
		$email =$_POST['email'];
		$presentaddress=$_POST['presentaddress']	;	
		$permanentaddress=$_POST['permanentaddress'];
		$pptstud =$_POST['pptstud'];
		$yrgap =$_POST['yrgap'];
		$marks10=$_POST['marks10'];
		$marks12 =$_POST['marks12'];
		
		
		 $marks_1_sem=$_POST['marks_1_sem'];
	 $countsemester=0;
	 if($marks_1_sem==0)
	 	{
			$marks_1_sem=0;
		}
	else
		{
			 $countsemester=$countsemester+1;
		}
	 $marks_2_sem=$_POST['marks_2_sem'];
	  if($marks_2_sem==0)
	 	{
			$marks_2_sem=0;
		}
	else
		{
			 $countsemester=$countsemester+1;
		}
	 $marks_3_sem=$_POST['marks_3_sem'];
	  if($marks_3_sem==0)
	 	{
			$marks_3_sem=0;
		}
	else
		{
			 $countsemester=$countsemester+1;
		}
	 $marks_4_sem=$_POST['marks_4_sem'];
	  if($marks_4_sem==0)
	 	{
			$marks_4_sem=0;
		}
	else
		{
			 $countsemester=$countsemester+1;
		}
	 $marks_5_sem=$_POST['marks_5_sem'];
	  if($marks_5_sem==0)
	 	{
			$marks_5_sem=0;
		}
	else
		{
			 $countsemester=$countsemester+1;
		}
	 $marks_6_sem=$_POST['marks_6_sem'];
	  if($marks_6_sem==0)
	 	{
			$marks_6_sem=0;
		}
	else
		{
			 $countsemester=$countsemester+1;
		}
	 $marks_7_sem=$_POST['marks_7_sem'];
	  if($marks_7_sem==0)
	 	{
			$marks_7_sem=0;
		}
	else
		{
			 $countsemester=$countsemester+1;
		}
	 $marks_8_sem=$_POST['marks_8_sem'];
	  if($marks_8_sem==0)
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
		
		$mob_no=$_POST['mob_no'];
		$hom_no=$_POST['hom_no'];
		$alt_no=$_POST['alt_no'];
		$password=$_POST['password'];
		
		
		//open connection//
		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="UPDATE prsstudentdb SET name ='$name',roll='$roll',branch='$branch',semester='$semester',
	email='$email',presentaddress='$presentaddress',password='$password',username='$username',
	permanentaddress='$permanentaddress',pptstud ='$pptstud',yrgap='$yrgap',
	marks10=$marks10,marks12=$marks12,marks_1_sem=$marks_1_sem,
	marks_2_sem=$marks_2_sem,
	marks_3_sem=$marks_3_sem,marks_4_sem =$marks_4_sem,
	marks_5_sem=$marks_5_sem,marks_6_sem =$marks_6_sem,marks_7_sem= $marks_7_sem ,marks_8_sem=$marks_8_sem   
	,cgpa=$cgpa,`mob_no`='$mob_no',`hom_no`='$hom_no',`alt_no`='$alt_no' 
	 WHERE regnumber = '$reg'";
		mysql_query($query)
		or die("query failed :".mysql_error());
		
echo strtoupper("Your Database Is Updated Successfully !!! ");

}
?>
         <div class="caption"> <b>STUDENT <BR /> <?php echo strtoupper ($name); ?></b><br />
            <b> <?php echo strtoupper ($roll); ?></b>
         	</div>
    
   		    
      </div>
   	<form name="regform" class="" method="post" action="stud_update_page.php" onsubmit="return validateForm()">
   	Your Details.. 
   	<table width="968" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" value="<?php echo strtoupper($name);  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>Registration number</td>
    <td><?php echo $regnumber ; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Roll</td>
    <td><input type="text" name="roll" value="<?php echo strtoupper($roll) ; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>Branch</td>
    <td><?php echo strtoupper($branch); ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="branch"> <option value="cse">CSE</option>
			  <option value="me">ME</option>
                                                                                            	 <option value="it">IT</option>
                                                                                            	 <option value="etc">ETC</option>
                                                                                            	 <option value="ce">CE</option>
                                                                                            	 <option value="ee">EE</option>
                                                                                    </select> &nbsp; Update By Choosing The Branch 
                                                                                            
   &nbsp;</td>
  </tr>
  <tr>
    <td>Semester</td>
    <td><input type="text" name="semester" value="<?php echo $semester; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" value="<?php echo $username; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" value="<?php echo $password?>"  />&nbsp;</td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $email; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>Present Address</td>
    <td> <input type="text" name="presentaddress" value="<?php echo strtoupper($presentaddress);  ?>" size="90" /> &nbsp;</td>
  </tr>
  <tr>
    <td>Permanent Address</td>
    <td><input type="text" name="permanentaddress" value="<?php echo strtoupper($permanentaddress); ?>" size="90" />&nbsp;</td>
  </tr>
  <tr>
    <td>PPT Student</td>
    <td><?php echo $pptstud;?> &nbsp; &nbsp; <select name="pptstud"><option value="yes">YES</option>
    												<option value="no">no</option>
                                                    </select> 
    &nbsp; Update By Choosing the Option</td>
  </tr>
  <tr>
    <td>Year gap</td>
    <td><input type="text" name="yrgap" value="<?php echo $yrgap ;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>10 th Marks</td>
    <td><input type="text" name="marks10" value="<?php echo $marks10 ; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>12 th Marks</td>
    <td><input type="text" name="marks12" value="<?php echo $marks12;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>1 st sem Marks</td>
    <td><input type="text" name="marks_1_sem" value="<?php echo $marks_1_sem ; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>2 nd sem Marks</td>
    <td><input type="text" name="marks_2_sem" value="<?php echo $marks_2_sem;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>3 rd sem Marks</td>
    <td><input type="text"  name="marks_3_sem" value="<?php echo $marks_3_sem;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>4 th sem Marks</td>
    <td><input type="text" name="marks_4_sem" value="<?php echo  $marks_4_sem; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>5 th sem Marks</td>
    <td><input type="text" name="marks_5_sem" value="<?php echo $marks_5_sem ; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>6 th sem Marks</td>
    <td><input type="text" name="marks_6_sem" value="<?php echo $marks_6_sem;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>7 th sem Marks</td>
    <td><input type="text" name="marks_7_sem" value="<?php echo $marks_7_sem;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>8 th sem Marks</td>
    <td><input type="text" name="marks_8_sem" value="<?php echo $marks_8_sem;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>CGPA</td>
    <td><?php echo $cgpa;  ?></td>
  </tr>
  <tr>
    <td>Mobile Number</td>
    <td><input type="text" name="mob_no" value="<?php echo $mob_no; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td>Home Number</td>
    <td><input type="text" name="hom_no" value="<?php echo $hom_no;  ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td width="338">Alternate Number</td>
    <td width="616"><input type="text" name="alt_no" value="<?php echo $alt_no;  ?>" />&nbsp;</td>
  </tr>
</table>

<center><input class="button" type="submit" value="UPDATE" name="update"  />
</center>
</form>
</div>
</div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>    </div>
</div> 
      
</body>

</html>
