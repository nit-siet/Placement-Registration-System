<?php 
//time//
$year=date("y");




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="../../css/allpagestyle.css" rel="stylesheet" type="text/css" />

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
          <td width="126"><a href="../../index.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="130" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="144">&nbsp;</td>
          </strong><td width="273" widht="66"><p>&nbsp;</p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >
    	
   		
       <div id="middlebody">
       <div class="only_border">
         	<div class="caption">
           
            NOTICES            <img class="icon" src="../image/notic.png" alt="notice" width="128" height="128" /></div>
     <?php
     
		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from noticetable order by `notice_number` DESC ";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		
		
		echo "</table>";
		
		
	 	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		echo"<br>";
		echo"<td> NOTICE NO. -",$row['notice_number'],"</td> <br> <td> SUBJECT-",$row['notice_subject'],"</td> <br>NOTICE-  <td>",$row['notices'],"</td> <br><td>",$row['date'],"</td> &nbsp; &nbsp; &nbsp; <td>",$row['time'],"</td>";
		echo "<br>";
		echo "</tr>";
		}
	
		mysql_close($connection);
	?>
   		    
        </div>
    	</form>
		
     </div>
     </div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>
    </div>
 	</div> 
      
</body>

</html>

