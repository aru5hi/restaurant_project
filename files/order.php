<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,'restaurant');

if(!$conn)
{
die("failed".mysqli_error($conn));
}
if(isset($_SESSION['loggedin'])){
	$cid=$_SESSION['cid'];
	$name=$_SESSION['fname']." ".$_SESSION['lname'];
	$email=$_SESSION['email'];
	$ph_no=$_SESSION['ph_no'];
	$addr=$_SESSION['addr'];
}
else{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$ph_no=$_POST['phone'];
	$addr=$_POST['addr'];
}
$pm=$_POST['S'];
$dt=$_POST['S1'];

 if(isset($_SESSION['loggedin'])){
 $sql="insert into cust_order(cid,name,email,ph_no,address,pay_meth,del_type) values('$cid','$name','$email','$ph_no','$addr','$pm','$dt');";
}
else{
	$sql="insert into guest_order(name,email,ph_no,address,pay_meth,del_type) values('$name','$email','$ph_no','$addr','$pm','$dt');";
}
$result=mysqli_query($conn,$sql);
if(!$result){
	die("failed".mysqli_error($conn));
}
$_SESSION[]
mysqli_close($conn);
?>