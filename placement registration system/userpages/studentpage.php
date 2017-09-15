<?php 
//time//
$year=date("y");

//session//
session_start();
 $regnumber=$_SESSION['regnumber'];
 if($regnumber=="")
{
header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
}

    
	  
		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsstudentdb where `regnumber`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		
		
		
	 	$row=mysql_fetch_array($result); 
		$name=$row['name'];
		$roll=$row['roll'];
		
		//session variable//
		 $_SESSION['name']=$name;
		 $_SESSION['roll']=$roll;
				
		
		
	
	
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
          <td width="129"><a href="studentpage.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="330" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="120" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="148">&nbsp;</td>
          </strong><td width="274" widht="66"><p><strong><a href="logout.php" ><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
<div class="middlebody" />
    
      <div class="only_border">
         	<div class="caption"> <b> STUDENT<br /> <?php echo strtoupper ($name); ?></b><br />
            <b><?php echo strtoupper($roll);?> </b><br />
            <i>WELCOME to your account !!!!! </i>
            </div>
    
   		    
      
   <table>
   <tr>
   <td>
	<form name="view" action="stud_view_detail.php" method="post" >
     1.&nbsp;View your details. 
     
    
   	 <input name="Submit" type="submit" class="button" value="VIEW"  />
     </form>
  
     <br />
     <form name="update" action="stud_update_page.php" method="post">
     2.&nbsp;Update your information.
      
     
     <input name="Submit" type="submit" class="button"  value="UPDATE" />
     </form>
     <br />
     <form name="notice" action="notice.php" method="post">
     3.&nbsp;View notices.
      
    
     <input name="Submit" type="submit" class="button" value="NOTICES" />
     </form>
     </td>
     </tr>
     
     </table>
     
     </div>
  </div>
     
    
    
</div>


<div id="footerdiv" class="footer">
   	  
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>
</div>
 	
      
</body>

</html>
