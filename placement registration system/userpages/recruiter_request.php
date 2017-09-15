<?php $year=date("y");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
function validateForm()
 {
 var  name=document.forms["recruiter_detail"]['org_name'].value;
	
	 if (name==null || name=="")
	  {
	  alert("The name of the organisation should be filled out ");
	  return false;
	  } 
	  
	  var  textarea=document.forms["recruiter_detail"]['textarea'].value;
	
	 if ( textarea==null || textarea=="")
	  {
	  alert("Fill your details ");
	  return false;
	  } 
	  
	var x=document.forms["recruiter_detail"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	 {
  	alert("Not a valid e-mail address");
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
          <td width="126"><a href="../../index.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="130" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="88">&nbsp;</td>
          </strong><td width="273" widht="66"><p>&nbsp;</p>
          </td>
          
	    </tr>
		</table>
</div>  
    <div class="middlebody" >
    <div class="only_border">
    	
   		 
         <div id="middlebody">
         	<div class="caption">SEND REQUEST <img src="../image/57992.png" alt="request"  class="icon"  /></div>
           NOTE- Recruiter can send request by providing their detail with details of authorised person of the organisation<br />
           &nbsp; &nbsp; The recruiter ID, Username and the Password will be provided by the administrator......
           <br />
           <br />
           <?php 
		   if(isset($_POST['send']))
		   {
		   		 $org_name=$_POST['org_name'];
 $org_detail=$_POST['textarea'];
 $org_email=$_POST['email'];
 
  function changevalue($org_name,$org_details)
  {$org_name="";
  $org_details="";
  }


/*generate randam username*/
			$chars="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   		 	$charArray = str_split($chars);
			$username="";
			$password="";
       		for($j =0;$j<5;$j++)
 	   		{ $randItem = array_rand($charArray);
			 $username.=$charArray[$randItem];
			
			}
/*generate password*/ 		
			$chars2="abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 			$charArray2 = str_split($chars2);
 			for($k=0;$k<8;$k++)
 			{$randItem = array_rand($charArray2);
			 $password.=$charArray2[$randItem];
			
			
			}
			
   
   
    
   

// create connection //
$connection = mysql_connect("localhost", "","") or die("Could not connect database");
	mysql_select_db("test", $connection) or die("Could not select database");
	$sql="INSERT INTO prsrecruiter(organisation_name,org_detail,email,username,password)VALUES('$org_name','$org_detail','$org_email','$username','$password')";
	mysql_query($sql) or die("query failed " .mysql_error());
	mysql_close($connection);
	echo "REQUEST SENT !!!!  ";


		   }
		   ?>
           
           <br />
           PROVIDE YOUR DETAILS
           <br />
           <form name="recruiter_detail" action="recruiter_request.php" method="post" onsubmit="return validateForm()">
          
           <p>Organisation Name <br /> 
             <input type="text" name="org_name" /> 
           <br /> <br />
           Enter the email id <br />
           <input type="text" name="email"  /> <br /><br /><br />
           Details of organisation and details of authorised person.<br />
           </p>
           <label>
           <textarea class="text" name="textarea" id="textarea" cols="70" rows="20"><?php echo "organisation Head Office,"; 
		    echo "Branch Name"; ?></textarea>
           <br />
           
           <input name="send" type="submit" class="button" value="send request" />
           </label>
           </form>
           </div>
           
           
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
