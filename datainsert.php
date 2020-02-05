<?php

include ("test.php");

$query = "insert into users (fname,lname,email,psword,created_date) values ('Ramesh','S','ramesh.s@mahindraretail.com','password','2020-02-04')";

$result= mysqli_query($dbcon, $query);

if($result){
  print "Insert successful";
}
else {
  echo "Error" .mysql_error();
}

?>
