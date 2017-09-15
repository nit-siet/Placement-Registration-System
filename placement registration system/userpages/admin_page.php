<?php
//session//
session_start();
$regnumber=$_SESSION['regnumber'];
 
 //date//
  $year=date("y");
 
 
 //if page is opened particularlly then it goes the login page //
  if($regnumber=="")
 {
 header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
 }
 
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="../../css/allpagestyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" /></head>

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
  		  <td width="144">&nbsp;</td>
          </strong><td width="273" widht="66"><p><strong><a href="logout.php"><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >
    <div class="only_border">
    <table>
    <tr>
    <td width="1008">
    
   	<form action="../generate password/passregeneration.php" method="post" name="generate_pass_page">
   1.Generate Password
    
    <input type="submit" class="button" value="GO"/>
    <br />
    <br />
    </form>
    
    <form action="admin_postnotice.php" method="post" name="">
   2.Post Notices
    
    <input type="submit" class="button" value="GO" />
    <br /><br />
    </form>
    
    <form action="admin_view_recruiter_request.php" method="post" name="">
   3.View Rcruiters Requests
   
    <input type="submit" class="button" value="GO" />
    <br /><br />
    </form>
   
    <form action="admin_view_student.php" method="post" name="">
   4.View Student Details.
        
    <input type="submit" class="button" value="GO" />
    <br /><br />
    </form>
    
        <form action="admin_changeus_pass.php" method="post" name="">
   5.Change username and password.
      
    <input type="submit" class="button" value="GO" />
    <br /><br />
    </form>

	    <form action="remove_recruiter.php" method="post" name="">
   6.List of Recruiters and Remove Recruiters.
        
    <input type="submit" class="button" value="GO" />
    <br /><br />
    </form>   </td>
    </tr>
    </table>
    

</div> 		
</div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>
    </div>
 	</div> 
      
</body>

</html>
