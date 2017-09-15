<?php 
//session//
session_start();
$regnumber=$_SESSION['regnumber'];

//date//



//if page is opened particularli then it goto the login page //
 if($regnumber=="")
 {
 header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
 }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="file:///C|/xampp/htdocs/css/allpagestyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/allpagestyle.css" rel="stylesheet" type="text/css" />
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
function validation()
{
var a=document.forms["login"]["regfrom"].value;

if(a==null || a=="" || a.length<10)
	{
	alert("(FROM)Enter the registration number from where the allocation of username and password starts and it should be in 10 digits ");
	return false;
	}
 
var b=document.forms["login"]["regto"].value;

if(b==null || b=="" || b.length<10)
	{
	alert("(TO)Enter the registration number to where the allocation of username and password starts and it should be in 10 digits");
	return false;
	}
if(b<a)
	{
	alert("please enter the registration no. in asending order like from 0901230020 to 0901230030");
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
          <td width="126"><a href="../userpages/admin_page.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong>
  		  <td width="130" nowrap="nowrap">&nbsp;</td>
  		  <td width="144">&nbsp;</td>
          </strong><td width="273" widht="66"><p><strong><a href="../userpages/logout.php"><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >
    <div class="only_border">
    	
   		
         <div id="middlebody">
         	<div class="caption">
   		 GENERATE USER NAME AND PASSWORD</div>
        		 <form method="post" action="see_gene_regnumbers.php" name="see reg.">
       			 See the registration numbers for which user name and password has been generated before 
       			   <input type="submit" class="button" value="view"  />
       			 </form>
              <form action="generate.php" name="login" method="post" onsubmit="return validation()" >
   		    <table  border="0" cellpadding="2" cellspacing="2">
 		 <tr>
    	<td width="401">Input a range of registration number 
    	.</td>
  		</tr>
  		<tr>
    	<td>FROM</td>
    	<td width="322"><input type="text" name="regfrom" id="username" autocomplete="off"/>&nbsp;</td>
  	</tr>
  	<tr>
    	<td>TO</td>
    	<td><input  type="text" name="regto" id="password" autocomplete="off"/>&nbsp;</td>
  	</tr>
	</table>
    	 <input name="submit" type="submit" class="button" id="submit" value="Generate" />
    	</form>	
        </div>
    </div>
        
		
</div>
   	<div id="footerdiv" class="footer">
   	 <div id="footerdiv" class="footer">
   	 &nbsp; &copy;STUDENT PROJECT 2013
     </div></div>
 	</div> 
      
</body>

</html>
