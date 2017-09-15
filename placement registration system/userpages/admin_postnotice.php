
<?php
//session//
session_start();
$regnumber=$_SESSION['regnumber'];

//date//
 $year=date("y");
 
 
 //if page is opened particularli then it goto the login page //
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
function validation()
{
var a=document.forms["compose"]["subject"].value;

if(a==null || a=="" )
	{
	alert("SUBJECT OF THE NOTICE MUST FILLED OUT  ");
	return false;
	}
 
var b=document.forms["compose"]["textarea"].value;

if(b==null || b=="" )
	{
	alert("THE DETAILS OF THE RECRUITER  MUST BE FILLED OUT ");
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
          <td width="126"><a href="admin_page.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="130" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="144">&nbsp;</td>
          </strong><td width="273" widht="66"><p><strong><a href="logout.php" ><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" ><div class="only_border">
    	
   		
         <div id="middlebody">
         
         <?php 
		 if(isset($_POST['publish']))
		 {
		 	 $subject=$_POST['subject'];
	$notice=$_POST['textarea'];
	 $time=date('h:i:s');
	 $date=date("y:m:d");



	$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="insert into`noticetable`(notice_subject,notices,date,time) values('$subject','$notice','$date','$time')";
		(mysql_query($query) or die("query failed :". mysql_error())); 
		echo "THE NOTICE IS PUBLISHED";
		
		mysql_close($connection);
		 
		 }
		 
		 
		 ?>
         
         
         
         
         	<div class="caption">
       	    POST NOTICES
   	  </div><form name="compose" action="admin_postnotice.php" method="post" onsubmit="return validation()">
          Subject<br />
          <input name="subject" type="text" value="" size="130" />
        <br />
          
        <br />  Compose Notice
<br />
          
          <label>
          <textarea class="text" name="textarea" id="textarea" cols="70" rows="20"></textarea>
          </label>
           
            <br />
   <input name="publish" type="submit" class="button" value="publish" />
            
   		     </form>
    	     
            
             
    		
</div>
    	
		</div>
     </div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>    </div>
</div> 
      
</body>

</html>

