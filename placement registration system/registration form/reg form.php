<?php 
//date//
$year=date("y");


//session//
session_start();
 $regnumber=$_SESSION['regnumber'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
<link href="../css/form.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.style2 {color: #A80000}
-->
</style>
</head>
<script type="text/javascript">
function validateForm()
	{ 
	//var variable name= doc.form[form name] [field name].value//
	 var  name=document.forms["regform"]['name'].value;
	 var nm = /^[a-zA-Z ]+$/;
	 if (name==null || name==""|| name!=name.match(nm))
	  {
	  alert("First name must be filled out and it should  have only alphabets");
	  return false;
	  } 
	  
	var  roll=document.forms["regform"]['rolnumber'].value;
	if (roll==null || roll=="")
	  {
	  alert("Roll Number  must be filled out");
  return false;
	  }
	
	
	
	  var  presentaddress=document.forms["regform"]['presentaddress'].value;
	  var valid_add = /^[0-9a-zA-Z ]+$/;
	  	 if ( presentaddress==null ||  presentaddress==""|| presentaddress!=presentaddress.match(valid_add))
	  {
	  alert("present address must be filled out/it should have only alphanumeric characters");
	  return false;
	  }

	 var  permanentaddress=document.forms["regform"]['permanetaddress'].value;
	 var  valid_add1 = /^[0-9a-zA-Z ]+$/;
	 	if (permanentaddress==null || permanentaddress==""|| permanentaddress!=permanentaddress.match(valid_add1))
	  {
	  alert("permanent address must be filled out/it should have only alphanumeric characters");
	  return false;
	  }
	  
	
	  

	var x=document.forms["regform"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	 {
  	alert("Not a valid e-mail address");
  	return false;
  	 }

	
	 var  marks10=document.forms["regform"]['mark10'].value;
	 var num1 = /^[0-9.]+$/; 
	  if (marks10==null || marks10==""||marks10!=marks10.match(num1))
	  {
	  alert("10 marks must be filled out/give numeric value only");
	  return false;
	  } 
	
	 var  marks12=document.forms["regform"]['mark12'].value;
	  var num2 = /^[0-9.]+$/; 
	  if (marks12==null || marks12==""|| marks12!=marks12.match(num2))
	  {
	  alert("12 marks must be filled out/give numeric value only");
	  return false;
	  }
	   
	var  sem1=document.forms["regform"]['sem1'].value;
	if(sem1!="")
	{
		var num = /^[0-9.]+$/;
		if(sem1>10||sem1!=sem1.match(num))
			{
				alert("1 st sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	
	var  sem2=document.forms["regform"]['sem2'].value;
	if(sem2!="")
	{
		var num = /^[0-9.]+$/;
		if(sem2>10||sem2!=sem2.match(num))
			{
				alert("2 nd sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem3=document.forms["regform"]['sem3'].value;
	if(sem3!="")
	{
		var num = /^[0-9.]+$/;
		if(sem3>10||sem3!=sem3.match(num))
			{
				alert("3 rd sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem4=document.forms["regform"]['sem4'].value;
	if(sem4!="")
	{
		var num = /^[0-9.]+$/;
		if(sem4>10||sem4!=sem4.match(num))
			{
				alert("4 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}	
	var  sem5=document.forms["regform"]['sem5'].value;
	if(sem5!="")
	{
		var num = /^[0-9.]+$/;
		if(sem5>10||sem5!=sem5.match(num))
			{
				alert("5 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem6=document.forms["regform"]['sem6'].value;
	if(sem6!="")
	{
		var num = /^[0-9.]+$/;
		if(sem6>10||sem6!=sem6.match(num))
			{
				alert("6 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem7=document.forms["regform"]['sem7'].value;
	if(sem7!="")
	{
		var num = /^[0-9.]+$/;
		if(sem7>10||sem7!=sem7.match(num))
			{
				alert("7 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	var  sem8=document.forms["regform"]['sem8'].value;
	if(sem8!="")
	{
		var num = /^[0-9.]+$/;
		if(sem8>10||sem8!=sem8.match(num))
			{
				alert("8 th sem marks cant be more than 10 and it should be numeric value");
				return false;
			} 	
	}
	/* var joinyear=document.forms["regform"]['joinyear'].value;
	 var year = /^[0-9]+$/; 
	 if (joinyear==null || joinyear==""|| joinyear.lenght<4 ||joinyear!=joinyear.match(year))
	  {
	  alert("join year must be filled out/it is not valid/should be numeric");
	  return false;
	  }
	*/
	
	 var  mob_no=document.forms["regform"]['mobile'].value;
	 var mob = /^[0-9]+$/; 
	 
	  if (mob_no==null || mob_no==""|| mob_no.length!=10|| mob_no!=mob_no.match(mob))
	  {
	  alert("mobile number  must be filled out and should be of 10 characters");
	  return false;
	  }
	  
	 var  hom_no=document.forms["regform"]['homenumber'].value;
	  var hom = /^[0-9]+$/; 
	   if (hom_no==null || hom_no==""||hom_no!=hom_no.match(hom)||hom_no.length!=10)
	  {
	  alert("home number  must be filled out in 10 characters");
	  return false;
	  }
	 var  alt_no=document.forms["regform"]['altnumber'].value;
	 var alt = /^[0-9]+$/;
	   if (alt_no==null || alt_no==""||alt_no!=alt_no.match(alt)||alt_no.length!=10)
	  {
	  alert("alternate number  must be filled out in 10 characters ");
	  return false;
	  } 
		
	}
	</script>


<body class="bodydiv">
        <div class="headdiv" >
      <table width="728" height="141">
<tr> 
      			<td width="657">PLACEMENT REGISTRATION SYSTEM   </td>
   	  <td width="29" class="small">SIET           	  </td>
        <tr>   
       </table>      
        </div>
<div id="menudiv" class="menu">
  	  <table width="1033" border="0" cellspacing="2" cellpadding="2">
	    <tr>
  		 <strong>
          <td width="126"><a href="reg form.php"><img src="../image/Home-icon.png" width="512" height="512" class="icon" />HOME</a></td>
  		  </strong><td width="328" nowrap="nowrap"><p><strong><a href="../userpages/help.php"><img src="../image/iHelp-icon.jpg" width="512" height="529" class="icon" />HELP</a></strong></p>
	        </td>
  		  <strong><td width="130" nowrap="nowrap"><a href="login/prslogin.php" ></a></td>
  		  <td width="144">&nbsp;</td>
          </strong><td width="273" widht="66"><p><strong><a href="../userpages/logout.php" ><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>        
<div class="middlebody">


	<div class="caption">
        REGISTRATION
        </div>
    <div id="bodydiv" class="regform">
    
    <form method="post" action="stud_db_execution.php" name="regform" onsubmit="return validateForm()" class="">
    <center>Registration Form</center>
      
      <table  border="0" cellpadding="5" cellspacing="5" frame="box" class>
        <tr>
          <td width="429">Name of the Student<span class="style2">*</span></td>
          <td width="500"><input type="text" name="name" width="500"/></td>
        </tr>
        <tr>
          <td>Roll number ( branch-year-roll)<span class="style2">*</span></td>
          <td><input type="text" name="rolnumber" width="500" /></td>
        </tr>
        <tr>
          <td>Branch (CSE,ETC,IT ....)<span class="style2">*</span></td>
          <td><select name="branch">
          <option value="CSE" >CSE</option>
          <option value="IT">IT</option>
          <option value="ME">ME</option>
          <option value="EE">EE</option>
          <option value="CE">CE</option>
          <option value="ETC">ETC</option>
          </select>

      </td>
        </tr>
        <tr>
          <td>Semester(current semesternuber 1,2..)<span class="style2">*</span></td>
          <td>
         <select name="semester">
         <option value="1">1</option>
         <option value="2">2</option>
         <option  value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         </select>
            
          &nbsp;</td>
        </tr>
        <tr>
          <td>Present address<span class="style2">*</span></td>
          <td><input type="text" name="presentaddress" width="500" size="90" /> </td>
        </tr>
        <tr>
          <td>Permanent address<span class="style2">*</span></td>
          <td><input type="text" name="permanetaddress" width="500" size="90"/>          </td>
        </tr>
        <tr>
          <td>E-mail address (id in use)<span class="style2">*</span></td>
          <td><input type="text" name="email" width="500" />
          &nbsp;</td>
        </tr>
        <tr>
          <td>Registered to ppt classes(yes or no )<span class="style2">*</span></td>
          <td><select name="pptclass">
          <option  value="yes">YES</option>
          <option value="no">NO</option>
          </select>
         
         </td>
        </tr>
         <tr>
          <td>Year gap(enter number of year)<span class="style2">*</span></td>
          <td><select name="yeargap">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          </select>
          &nbsp;</td>
        </tr>
        <tr>
          <td>10 th marks (in percentage)<span class="style2">*</span></td>
          <td><input type="text" name="mark10" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>12 marks <span class="style2">*</span></td>
          <td><input type="text" name="mark12" width="500" />&nbsp;</td>
        </tr>
        
        <tr>
          <td><p>1 st semester marks(SGPA)</p>
          <p>note-enter details till your current semester</p></td>
          <td><input type="text" name="sem1" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>2 nd semester marks </td>
          <td><input type="text" name="sem2" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>3 rd semester marks</td>
          <td><input type="text" name="sem3" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>4 th semester marks</td>
          <td><input type="text" name="sem4" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>5 th semester marks</td>
          <td><input type="text" name="sem5" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>6 th semester marks</td>
          <td><input type="text" name="sem6" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>7 th semester marks</td>
          <td><input type="text" name="sem7" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>8 th semester marks</td>
          <td><input type="text" name="sem8" width="500" />&nbsp;</td>
        </tr>
        
        <tr>
          <td>Mobile number* (your contact number)</td>
          <td><input type="text" name="mobile" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td>Home number<span class="style2">*</span> (parents contact number)</td>
          <td><input type="text" name="homenumber" width="500" />&nbsp;</td>
        </tr>
        <tr>
          <td><p>Any alternative number <span class="style2">*</span></p>
          <p>NOTE-if you dont have alternative number enter your mobile number</p></td>
          <td><input type="text" name="altnumber" width="500" />&nbsp;</td>
        </tr>
      </table>
      
     <center ><input  name="submit" type="submit" class="button" value="submit"/>
     </center>
     
      </form>
           
	</div>
  </div>
   <div id="footerdiv" class="footer">
    &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>   </div>
</div>   
</body>

</html>
