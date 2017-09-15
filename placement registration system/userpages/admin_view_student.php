
<?php
//session start//
//session//
session_start();
$regnumber=$_SESSION['regnumber'];

/*student view your detail*/
 $year=date("y");



if($regnumber=="")
{
header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
}


    
	  
		
		
		
	 	
		
		
	
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
          <td width="126"><a href="admin_page.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong>
  		  <td width="130" nowrap="nowrap">&nbsp;</td>
  		  <td width="88">&nbsp;</td>
          </strong><td width="273" widht="66"><p><strong><a href="logout.php"><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
<div class="middlebody" >
<div class="only_border">
    	
   		<div class="caption"> <b> Students Detais in tabular form </b><br  /></div>
        <table border="10">
      
        	<tr>
            	<th> REG. NUMBER</th>
                <th> REG. STATUS</th>
                <th> NAME</th>
                <th> ROLL NUMBER </th>
                <th>BRANCH</th>
                <th>SEMESTER</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>EMAIL</th>
                <th>PRESENT ADDRESS</th>
                <th>PERMANENT ADDRESS</th>
                <th>PPT STUDENT</th>
                <th>YEAR GAP</th>
                <th>MARKS 10</th>
                <th>MARKS 12</th>
                <th>JOIN DATE</th>
                <th>MARKS 1 SEM </th>
                <th>MARKS 2 SEM </th>
                <th>MARKS 3 SEM </th>
                       <th>MARKS 4 SEM </th>
                <th>MARKS 5 SEM </th>
                <th>MARKS 6 SEM </th>
                <th>MARKS 7 SEM </th>
                <th>MARKS 8 SEM </th>
                <th>CGPA</th>
                <th>CONTACT NO.</th>
                <th>HOME CONTACT</th>
                <th>ALTERNATE CONTACT</th>
             </tr>
             
         
 
<?php  

		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsstudentdb";
		$result=mysql_query($query)
		or die("query failed :". mysql_error()); 
		
		
		while($row=mysql_fetch_array($result))
	{
	
		echo "<tr><td>",$row['regnumber']; echo "</td>";
		echo "<td>",$row['reg_status']; echo"</td>"; 
		 echo "<td>",$row['name']; echo "</td>";
		  echo "<td>",$row['roll'];echo "</td>";
		echo "<td>",$row['branch']; echo"</td>"; 
		echo "<td>",$row['semester']; echo"</td>"; 
		 echo "<td>",$row['username']; echo "</td>";
		  echo "<td>",$row['password'];echo "</td>";
		echo "<td>",$row['email']; echo"</td>"; 
		echo "<td>",$row['presentaddress']; echo"</td>"; 
		echo "<td>",$row['permanentaddress']; echo"</td>"; 
		echo "<td>",$row['pptstud']; echo"</td>";
		echo "<td>",$row['yrgap']; echo"</td>"; 
		echo "<td>",$row['marks10']; echo"</td>";  
		echo "<td>",$row['marks12']; echo"</td>"; 
		echo "<td>",$row['join_date']; echo"</td>"; 
		echo "<td>",$row['marks_1_sem']; echo"</td>"; 
		echo "<td>",$row['marks_2_sem']; echo"</td>";
		echo "<td>",$row['marks_3_sem']; echo"</td>"; 
		echo "<td>",$row['marks_4_sem']; echo"</td>"; 
		echo "<td>",$row['marks_5_sem']; echo"</td>"; 
		echo "<td>",$row['marks_6_sem']; echo"</td>"; 
		echo "<td>",$row['marks_7_sem']; echo"</td>";
		echo "<td>",$row['marks_8_sem']; echo"</td>"; 
		echo "<td>",$row['cgpa']; echo"</td>"; 
		echo "<td>",$row['mob_no']; echo"</td>";
		echo "<td>",$row['hom_no']; echo"</td>"; 
	 
		
		 
		
		
		 echo "<td>",$row['alt_no']; echo"</td></tr>";
		
		
		
	}
		
?>
	 
      
		
</tr>
	</table>
    <?php 
mysql_close($connection);
?>
 
  </div> 
  </div>      	  
   
   	

   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>
    </div>
 	</div> 
      
</body>
</html>
