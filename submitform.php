<?php
include("dbcon.php");

//print "<pre>";print_r($_POST);print "</pre>";die;
//print_r($_POST);

$hdnuserid=$_POST['user_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$psword=$_POST['psword'];

if(!empty($hdnuserid)){
$query = "update users set fname='$fname', lname='$lname', email='$email', psword='$psword', lastupdt_date=now() where user_id=$hdnuserid";
}
else { 
$query= "INSERT INTO users (fname,lname,email,psword,created_date) values ('$fname','$lname','$email','$psword',now())";
}
$result = mysqli_query($dbcon, $query);

if($result){
  	header('location: report.php');
  //print "New record inserted";
}
 else {
  echo "Error" . mysqli_connect_error();
}

?>
