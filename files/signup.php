<html>
<head>
<link rel='stylesheet' type="text/css" href="mystyle.css">

</head>
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
button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 5px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

button:hover span {
  padding-right: 25px;
}

button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
<body link="white" vlink="white">
<font color="white" align="center">
<ul>
<li> <a class="h1"> CHINA BOWL</a>
<li><a href="home.php">HOME</a>
<li><a href="menu.php">MENU</a>
<li><a href="reserve.php">RESERVATIONS</a>
<li><a href="franch.php">FRANCHISE</a>
<li><a href="about.php">ABOUT</a>
<li><a class="active" href="signup.php">SIGN UP</a>
<li> <a href="online.php" id="new">ORDER ONLINE</a>  
</ul>
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

<img src="signup.jpg" height=400 width=1330>
<p class="transbox">
  Hi <?php echo($_SESSION['fname']); ?>,<br>
  You can use our online delivery and other services of our website!
  </p>
<?php }

else{
?>
 <span style="font-family:'Footlight MT';font-size:20px; background-color:rgb(0,0,0); margin-left:1100px;margin-top:20px;"><a href="login.php" >Already a member? LOG IN</a></span>


<img src="signup.jpg" height=400 width=1330>
<form name="f1"  class="transbox" method="post" action="signup.php" style="font-family:'Footlight MT';">
<b style="font-family:'Footlight MT';font-size:35px;margin-top:20px;">SIGN UP HERE!</b><br><br>
FIRST NAME : <input required type = 'text' name ="fname" value=""><font id="demo1"></font><br>
<br>
LAST NAME : <input required type = 'text' name = "lname" value=""><font id="demo2"></font><br>
<br>
EMAIL ID : <input required type = 'text' name ="email" value=""><font id="demo3"></font><br>
<br>
PASSWORD : <input required type='password' name="pass">
<br><br> 
CONTACT NUMBER : +91<input required type = 'text' name ="contact" value=""><font id="demo4"></font><br>
<br>
ADDRESS : <input required type = 'text' name ="address" value=""><font id="demo5"></font><br>

<br><BUTTON NAME='submit' class="btn" onclick="validate()">Submit</BUTTON>
</center>
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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$contact=$_POST['contact'];
$address=$_POST['address'];

$sql="INSERT INTO customer(fname,lname,email,ph_no,address,user_pass) VALUES ('$fname','$lname','$email','$contact','$address','$pass');";
$check=mysqli_query($conn,$sql);
if(!$check)
{
die("failed". mysqli_error($conn));
}
}
}
?>
</form>
</body>
</html>