<?php $year=date("y");
session_start();
$regnumber=$_SESSION['regnumber'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="file:///C|/xampp/css/allpagestyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
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
          <td width="126"><a href="recruiter_page.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="130" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="88"><strong><a href="logout.php" ></a></strong></td>
          </strong><td width="273" widht="66"><p><strong><strong><a href="logout.php" ><img src="../image/logout-icon.png" alt="" width="256" height="256" class="icon" />LOGOUT</a></strong></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >	
    		<div class="caption">
            <?php echo "	RECRUITER ID-".$regnumber ; ?><br />
            SEARCH STUDENT DETAILS</div>
   
        <div class="only_border">
         <form action="recruiter_studentview.php" name="login" method="post" >
          <table>
           <tr>
           <td width="294"> 10 th Marks <br />should be more than</td>
           <td width="294"> 12 th Marks  <br />should be more than</td>
           <td width="294"> CGPA <br />  should be more than</td>
           <td width="294"> year gap<br /> should be less than or equals <br />
           </tr>
           <tr>
           <td>   <input type="text" name="marks_10"   autocomplete="off"/>
           % </td>
           <td><input type="text"  name="marks_12" autocomplete="off" />
           %   </td>
           <td> <input type="text" name="cgpa" autocomplete="off" /> 
           CGPA</td>
           <td><input type="text" name="yrgap" autocomplete="off" /> 
           year(s)</tr>
           <tr><td>
             <input name="find"class="button"type="submit" value="FIND STUDENTS"  />
            </td>
            </tr>
     		</table>
         </form>
         <br />
         <br />
       	<?php 
		if(isset($_POST['find']))
		{	
			  $marks_10=$_POST['marks_10'];
			  $marks_12=$_POST['marks_12'];
			  $cgpa=$_POST['cgpa'];
			  $yrgap=$_POST['yrgap'];
			 
			 if($marks_10=="")
			 	{
					$marks_10=0;
				}
			
			if($marks_12=="")
				{
					$marks_12=0;
				}
			
			if($cgpa=="")
				{
					$cgpa=0;
				}
			
			if($yrgap=="")
				{
					$yrgap=5;
				}
				
				
			$connection =mysql_connect("localhost","","")
			or die ("could not connect to the server ");
			$db=mysql_select_db("test",$connection)
			or die("could not select the data base ");
			
				
			$query="select * from  prsstudentdb where ((marks10>$marks_10) and (marks12>$marks_12) and(cgpa>$cgpa)and (yrgap<=$yrgap) )";
			$result=mysql_query($query)
			or die("query failed :". mysql_error()); 
			?><table border="10"><tr><th width="264">Name</th>
       	<th width="207">Reg. no.</th>
       	<th width="193">10<sup>th </sup>marks</th>
       	<th width="208">12<sup>th</sup>marks</th>
       	<th width="164">cgpa</th>
       	</tr><?php
			
			while($row=mysql_fetch_array($result))
			{	
				?> <tr><td><?php
				 echo $row['name'];?> </td><td>
				 <?php echo $row['regnumber']; ?></td><td>
				 <?php echo $row['marks10'];?> </td><td>
                  <?php echo $row['marks12'];?></td><td>
                   <?php echo $row['cgpa'];?> </td></tr>
				   <?php
				
			}
			?></table><?php
            
		} 
		?>
        </div>
        </div>
        
        
		
</div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>    </div>
</div> 
      
</body>

</html>
