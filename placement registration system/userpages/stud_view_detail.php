
<?php
/*student view your detail*/

//time//
 $year=date("y");
 //session//
 session_start();
 $regnumber=$_SESSION['regnumber'];
 $name=$_SESSION['name'];
 $roll=$_SESSION['roll'];
if($regnumber=="")
{
//header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
}


    
	  
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
		$join_date =$row['join_date'];
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
		
		
		mysql_close($connection);
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
    	
   		
       <div id="middlebody">
<div class="only_border">
         	<div class="caption"> 
         	  <b>STUDENT</b><br /><b><?php echo strtoupper ($name); ?></b><br />
       	      <b>	<?php echo strtoupper($roll); ?></b> 
       	    </div>
    
   		    
      
  
   	Your Details..
   	<table width="968" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>Name</td>
    <td><?php echo strtoupper($name);  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Registration number</td>
    <td><?php echo $regnumber ; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Roll</td>
    <td><?php echo strtoupper($roll) ; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Branch</td>
    <td><?php echo strtoupper($branch); ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Semester</td>
    <td><?php echo $semester; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Username</td>
    <td><?php echo $username; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $email; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Present Address</td>
    <td><?php echo strtoupper($presentaddress);  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Permanent Address</td>
    <td><?php echo strtoupper($permanentaddress); ?>&nbsp;</td>
  </tr>
  <tr>
    <td>PPT Student</td>
    <td><?php echo strtoupper($pptstud) ;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Year gap</td>
    <td><?php echo $yrgap ;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>10 th Marks</td>
    <td><?php echo $marks10 ; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>12 th Marks</td>
    <td><?php echo $marks12;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Year joined </td>
    <td><?php echo $join_date ; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>1 st Marks</td>
    <td><?php echo $marks_1_sem ; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>2 nd Marks</td>
    <td><?php echo $marks_2_sem;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>3 rd Marks</td>
    <td><?php echo $marks_3_sem;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>4 th Marks</td>
    <td><?php echo  $marks_4_sem; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>5 th Marks</td>
    <td><?php echo $marks_5_sem ; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>6 th Marks</td>
    <td><?php echo $marks_6_sem;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>7 th Marks</td>
    <td><?php echo $marks_7_sem;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>8 th Marks</td>
    <td><?php echo $marks_8_sem;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>CGPA</td>
    <td><?php echo $cgpa;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Mobile Number</td>
    <td><?php echo $mob_no; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Home Number</td>
    <td><?php echo $hom_no;  ?>&nbsp;</td>
  </tr>
  <tr>
    <td width="338">Alternate Number</td>
    <td width="616"><?php echo $alt_no;  ?>&nbsp;</td>
  </tr>
</table>
</div>
</div>
</div>

   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>
    </div>
 	</div> 
      
</body>

</html>
