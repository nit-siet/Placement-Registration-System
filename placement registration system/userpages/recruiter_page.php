<?php $year=date("y");
session_start();
$regnumber=$_SESSION['regnumber'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="file:///C|/xampp/css/allpagestyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="file:///C|/xampp/htdocs/css/allpagestyle.css" rel="stylesheet" type="text/css" />
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
  		  <td width="144"><strong><a href="logout.php" ></a></strong></td>
          </strong><td width="273" widht="66"><p><strong><strong><a href="logout.php" ><img src="../image/logout-icon.png" alt="" width="256" height="256" class="icon" />LOGOUT</a></strong></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >
    <div class="only_border">	
    		<div class="caption">Welcome Recruiter<br />
            <?php echo "	RECRUITER ID-".$regnumber ; ?>
            </div>
    	
   		 <form action="recruiter_studentview.php" name="login" method="post" >
          <table> 
        <tr>
        <td>
        1.Search Student Details.<input type="submit" class="button" value="GO" />
        <br />
        </td>
        </tr>
        </table>
    	</form>
        
         <form action="recruiter_change_passus.php" name="login" method="post" >
          <table> 
        <tr>
        <td>
        2.Change Username And  password.<input type="submit" class="button" value="GO" />
        <br />
        </td>
        </tr>
        </table>
    	</form>
       
        </div>
        
        
		
</div>
</div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>    </div>
 	</div> 
      
</body>

</html>
