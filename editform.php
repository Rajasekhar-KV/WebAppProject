<?php 

include("dbcon.php");

$userid=$_GET['user_id'];

$query= "select user_id,fname,lname,email,psword from users where user_id = $userid";

$result = mysqli_query($dbcon, $query);

$arrRecord = mysqli_fetch_array($result, MYSQL_ASSOC);
//print_r($arrRecord);
$userid=$arrRecord['user_id'];
$fname=$arrRecord['fname'];
$lname=$arrRecord['lname'];
$email=$arrRecord['email'];
$psword=$arrRecord['psword'];

?>
<form method="POST" action="submitform.php">
<table cellpadding="3" cellspacing="3">
	<tr>
	   <td>First Name:</td>
	   <td><input type="text" name="fname" value="<?php echo $fname ?>"/></td>
	</tr>
	<tr>
	  <td>Last Name:</td>
	  <td><input type="text" name="lname" value="<?php echo $lname ?>"/></td>
	</tr>
	<tr>
	  <td>Email:</td>
   	  <td><input type="text" name="email" value="<?php echo $email ?>"/></td>
	</tr>
	<tr>
	  <td>Password:</td>
	  <td><input type="text" name="psword" value="<?php echo $psword ?>"/></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td><input type="submit" value="Submit"/></td>
	</tr>
          <input type="hidden" name="user_id" value="<?php echo $userid ?>">
</table>
</form>
