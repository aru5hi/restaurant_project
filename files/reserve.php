<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="JavaScript" src="res.js">
</script>


<html>
<head>

<link rel="stylesheet" type="text/css" href="reserve.css">
<style>
@keyframes example {
    from{opacity:0;}
to{opacity:1;}
}
#new {
animation-name:example;
animation-duration:1s;
animation-iteration-count:infinite;
font-size:30px;
}
</style>
</head>

<body link="#d9d9d9" vlink="#d9d9d9">
<br><br><br>
 <?php
session_start();
if(isset($_POST['logout'])){
    $_SESSION=[];
    session_destroy();
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
?>
<span style="font-family:'Footlight MT';font-size:20px; color:white;border-color:white;border-radius:5px; background-color:rgb(0,0,0); margin-left:1150px;">WELCOME <?php echo($_SESSION['fname']); ?> </span>
<form method="POST"> <button name="logout" style="color:white;width:50px;background-color:rgb(0,0,0);font-size:10px;margin-left:1150px;">LOGOUT</button>
</form>
<?php }

else{
?>
 <span style="font-family:'Footlight MT';font-size:20px; background-color:rgb(0,0,0); margin-left:1100px;margin-top:20px;"><a href="login.php" >Already a member? LOG IN</a></span>
<?php } ?>
<img src="reserve.jpeg" height=400 width=1330>
<font color="white" align="center">

<ul>
<li> <a class="h1"> CHINA BOWL</a>
<li><a href="home.php">HOME</a>
<li><a href="menu.php">MENU</a>
<li><a href="reserve.php" style="   background-color:grey;
color:white;">RESERVATIONS</a>
<li><a href="franch.php">LOCATE US</a>
<li><a href="about.php">ABOUT</a>
<li><a href="signup.php">SIGN UP</a>
<li> <a href="online.php" id="new">ORDER ONLINE</a>  
</ul>
</font>

<p class="transbox" align = "center">
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
?>
<span style="font-family:'Footlight MT';font-size:20px; background-color:rgb(0,0,0); margin-left:1250px;">WELCOME <?php echo($_SESSION['fname']); ?> <br> You can make your reservations</span>

<form id="f" class="transbox" method="post" action="reserve.php">
<center>
Name:  <input required type="text" name= "t1" value="<?php echo($_SESSION['fname']." ".$_SESSION['lname']); ?>"/>**<br>
Phone-number: <input required type="text" name="t2" value="<?php echo($_SESSION['ph_no']); ?>" />**<br>
No. Of Seats: <input required type="text" name="t3" />**<br>
Reservation type: <select required id="x" NAME="s1" /><option></option> <option>Personal</option><option>Group</option>
</select>
<br>
<span id="party"></span>
<br>
date:<input required type="date" name="t4" />**<br>
time: <input required type="number" min="01" max="12" name="hh" />:<input required type="number" min="00" max="59" name="mm" /> <select required name="dn" /><option>AM</option> <option>PM</option> </select><br>
<input type="Submit" name='submit'>
</form>
</p>
<?php }

else{
?>
 
<br>
Already a member?<br>

<button><a href="login.php">LOGIN</a></button>
</p>
<center style="font-family:'Footlight MT';font-size:35px;color:white;">
<br>OR<br></center><br>
<form id="f" class="transbox" method="post" action="reserve.php">
<center>
Name:  <input required type="text" name= "t1" />**<br>
Phone-number: <input required type="text" name="t2" />**<br>
No. Of Seats: <input required type="text" name="t3" />**<br>
Reservation type: <select required id="x" NAME="s1" /><option></option> <option>Personal</option><option>Group</option>
</select>
<br>
<span id="party"></span>
<br>
date:<input required type="date" name="t4" />**<br>
time: <input required type="number" min="01" max="12" name="hh" />:<input required type="number" min="00" max="59" name="mm" /> <select required name="dn" /><option>AM</option> <option>PM</option> </select><br>
<input type="Submit" name='submit'>
</form>
</p>
<?php }
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
$s=mysqli_select_db($conn,'restaurant');

if(!$conn)
{
die("failed".mysqli_error($conn));
}
if(isset($_POST['submit'])){
$name=$_POST['t1'];
$p=$_POST['t2'];
$dt=date('d')."-".date('m')."-".date('Y');
$res_date=$_POST['t4'];
$res_time=$_POST['hh'].":".$_POST['mm']." ".$_POST['dn'];
$x=$_POST['s1'];
$nos=$_POST['t3'];
if($x=="Personal"){
	$type="p";
	$sql="INSERT INTO guest_res(name,ph_no,date_of_entry,res_date,res_time,type,party_type,no_of_guest) VALUES ('$name','$p','$dt','$res_date','$res_time','$type','NA','$nos');";
}
else{
	$type="g";
	$ptype=$_POST['pt'];
	$sql="INSERT INTO guest_res(name,ph_no,date_of_entry,res_date,res_time,type,party_type,no_of_guest) VALUES ('$name','$p','$dt','$res_date','$res_time','$type','$ptype','$nos');";
}

$check=mysqli_query($conn,$sql);
if(!$check)
{
die("failed". mysqli_error($conn));
}}


?>

</body></html>

