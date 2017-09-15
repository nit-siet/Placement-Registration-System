
<?php 

//session//
session_start();
$regnumber=$_SESSION['regnumber'];

if($regnumber=="")
 {
 header("location:http://localhost/new/placement%20registration%20system/login/prslogin.php");
 }

//date//
$year=date("y");


//if remove button is pressed //
 if(isset($_POST['remove']))
 {
 	 $rec_id=$_POST['rec_id'];
		$connection=mysql_connect("localhost","","") or die("connnnection failsed");
		mysql_select_db("test",$connection) or die("database not selected ");
		$sql="delete from prsrecruiter where recruiter_id='$rec_id'";
		mysql_query($sql) or die("query failed").mysql_error();

 
 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title>Placement Registration System</title>
<link href="../../css/allpagestyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/allpagestyle.css" rel="stylesheet" type="text/css" />
</head>
 
<script type="text/javascript">
 
 function validation()
{
var a=document.forms["remove"]["rec_id"].value;
var num = /^[0-9]+$/; 

if(a==null || a==""|| a!=a.match(num))
	{
	alert( "Recruiter id should be filled out and it should be a numeric value ");
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
  		  <td width="88">&nbsp;</td>
          </strong><td width="273" widht="66"><p><strong><a href="logout.php" ><img src="../image/logout-icon.png" width="256" height="256" class="icon" />LOGOUT</a></strong></p>
          </td>
          
	    </tr>
		</table>
</div>
    <div class="middlebody" >
    	
   		 
         <div id="middlebody">
         <div class="only_border">
         	<div class="caption">REMOVE RECRUITER
            </div>
            List of Recruiters 
            <?php 
			$connection=mysql_connect("localhost","","") or die("connection failed");
			mysql_select_db("test",$connection) or die("database is not selected ");
			$query="select*from prsrecruiter";
			$result=mysql_query($query) or die ("query failed");
			?> 
            <table width="862" height="87" border="10"  >
			<tr><th width="127">RECRUITER ID.</th>
		      <th width="68">ORG. NAME </th>
              <th width="67">USER NAME </th>
              <th width="120">PASSWORD </th>
              <th >ORG DEATILS</th>
              <th width="84">APPROVE STATUS</th>
			<?php
			
	 	while($row=mysql_fetch_array($result))
		{echo "<tr><td>",$row['recruiter_id']; echo "</td>";
		 echo "<td>",$row['organisation_name']; echo "</td>";
		  echo "<td>",$row['username'];echo "</td>";
		echo "<td>",$row['password']; echo"</td>"; 
		echo "<td>",$row['org_detail']; echo"</td>"; 
		if ($row['approve_status']==0)
		     	$status="not approved";
		else
				$status="approved";		
		
		 echo "<td>",$status; echo"</td></tr>";
		
		
		}
		mysql_close($connection);
			
			?>
            </table>
            
           <BR /><br />
<br />


            
          <form method="post" action="remove_recruiter.php" name="remove" onsubmit="return validation()">
          ENTER THE RECRUITER ID WHICH IS TO BE REMOVED
         <BR />
         <br />
         <br />

         <input type="text" name="rec_id"  />
         <input name="remove" type="submit" class="button" value="Remove"  />
          </form>
          
      </div>
      </div>
           
           
        </div>
    	 
		
     </div>
   	<div id="footerdiv" class="footer">
   	 
   	 &nbsp; &copy;STUDENT PROJECT 20<?php echo $year;?>
    </div>
 	</div> 
      
</body>

</html>
