<?php 

include ("dbcon.php");
$userid = $_GET['user_id'];

//$query = "delete from users where user_id = $userid";
$query = "update users set status=0, lastupdt_date=now() where user_id = $userid";
$result = mysqli_query($dbcon, $query);

if($result){
  header('location: report.php');
} else {
  echo "Error in delete". mysql_error();
}


?>
