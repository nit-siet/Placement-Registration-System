
<?php


//session//
session_start();
$regnumber=$_SESSION['regnumber'];
  
if(isset($_POST['change']))
  {	
  		$new_user=$_POST['new_user'];
	    $new_pass=$_POST['new_pass'];
 
	    $connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="UPDATE prsrecruiter SET username ='$new_user',password='$new_pass' WHERE recruiter_id = '$regnumber'";
		mysql_query($query)
		or die("query failed :". mysql_error());
		
		mysql_close($connection);
  	
  } 
  
/*time*/
 $year=date("y");



//if page is opened particularli then it goto the login page //
  if($regnumber=="")
 {
 header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
 }






    
	  
		$connection =mysql_connect("localhost","","")
		or die ("could not connect to the server ");
		$db=mysql_select_db("test",$connection)
		or die("could not select the data base ");
		$query="select *from  prsrecruiter where `recruiter_id`='$regnumber'";
		$result=mysql_query($query)
		or die("query failed :". mysql_error());
		
		
		
	 	$row=mysql_fetch_array($result); 
		$username=$row['username'];
		$password=$row['password'];
		mysql_close($connection);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>
<script>
function validation()
{
var a=document.forms["change"]["new_user"].value;

if(a==null || a=="" || a.length<5)
	{
	alert("new username must be filled out and it should not be less than 5 characters  ");
	return false;
	}
 
var b=document.forms["change"]["new_pass"].value;

if(b==null || b=="" || b.length<8)
	{
	alert("new password must be filled out and it should not be less than 8 characters ");
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
          <td width="126"><a href="recruiter_page.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
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
     
         	<div class="caption"> RECRUITER ID- <?php echo $regnumber; ?><br />
            <b>Change Username and Password</b><br />
            	
                
         	</div>
    
   		    
      </div>
   	
   	
       <table width="859" border="0" cellspacing="2" cellpadding="2">
         <tr>
           <td width="174" height="45">PREVIOUS </td>
           <td width="671"><p>USERNAME&nbsp; <?php echo $username;?></p>
           <p>PASSWORD &nbsp; <?php $j=strlen($password); for($i=0;$i<$j;$i++){echo "*";} ?></td>
         </tr>
         <tr>
           <td height="132">SET NEW </td>
           <td>
           <form name="change" method="post" action="recruiter_change_passus.php" onsubmit="return validation()" >
           <p>USERNAME&nbsp; <input type="text" name="new_user" /></p>
             <p>PASSWORD&nbsp;
               <INPUT type="password" name="new_pass" /></p>
             
           <input name="change" type="submit" class="button" value="CHANGE" />
           </form>
           </td>
         </tr>
       </table>
</div>
</div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>    </div>
 	</div> 
      
</body>

</html>

