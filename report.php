<?php 

include("test.php");

$query="select user_id,fname,lname,email,status,created_date,lastupdt_date from users";

$result= mysqli_query($dbcon, $query);
echo "<a href='addform.php'>Add User</a>";
echo "<br />";
echo "<br />";
echo"<table cellspacing=1 cellpadding=1 border=1>";
echo"<tr>";
//echo"<td>UserID</td>";
echo"<td>First Name</td>";
echo"<td>Last Name</td>";
echo"<td>Email</td>";
echo"<td>Status</td>";
echo"<td>Created Date</td>";
echo"<td>Last Update Date </td>";
echo"<td>Action</td>";
echo"</tr>";

while($row= mysqli_fetch_array($result,MYSQL_ASSOC)){
  $userid=$row["user_id"];
  $fname=$row["fname"];
  $lname=$row["lname"];
  $email=$row["email"];
  $status=$row["status"];
  $created_date=$row["created_date"];
  $lastupdt_date=$row["lastupdt_date"];
echo "<tr>";
//echo"<td>$userid</td>";
echo"<td>$fname</td>";
echo"<td>$lname</td>";
echo"<td>$email</td>";
echo"<td>$status</td>";
echo"<td>$created_date</td>";
echo"<td>$lastupdt_date</td>";
echo"<td><a href='editform.php?user_id=$userid'>Edit</a>";
echo"&nbsp &nbsp<a href='deleteform.php?user_id=$userid'>Delete</a></td>";
echo "</tr>";
}
echo"</table>";
?>
