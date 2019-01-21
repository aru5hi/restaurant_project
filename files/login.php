<html>
<head>
<link rel='stylesheet' type="text/css" href="login.css">

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
<li><a href="signup.php">SIGN UP</a>
<li> <a href="online.php" >ORDER ONLINE</a>  
</ul>
<?php
  session_start();
  if(isset($_POST['logout'])){
    $_SESSION=[];
    session_destroy();
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
?><br><br><br>
<form method="POST"> <button name="logout" style="color:white;width:50px;background-color:rgb(0,0,0);font-size:10px;margin-left:1150px;">LOGOUT</button>
</form>
<span style="font-family:'Footlight MT';font-size:50px;margin-top:15px; margin-left:500px;">WELCOME <?php echo($_SESSION['fname']); ?> </span>
<h1> You have logged in to your account!</h1>
<?php }

else{
?>
 


<form method="POST" action="login.php" class="transbox">
Email ID <input type="text" name="e" placeholder="Email"><br>
Password  <input type="Password" name="p">
<button name="s" class="btn">SUBMIT</button>
</form>

<?php
$servername="localhost";
$username="root";
$pass="";

$conn=mysqli_connect($servername,$username,$pass);
mysqli_select_db($conn,"restaurant");
if(!$conn){
  die("ERROR OCCURED. Please try again.".mysqli_error($conn));
}
if(isset($_POST['s'])){
  $user=$_POST['e'];
  $pass=$_POST['p'];
  $sql="select * from customer where email='$user' and user_pass='$pass';";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  if($user==$row['email'] && $pass==$row['user_pass']){

  $_SESSION['loggedin']=true;
  $_SESSION['cid']=$row['cid'];
  $_SESSION['fname']=$row['fname'];
  $_SESSION['lname']=$row['lname'];
  $_SESSION['email']=$row['email'];
  $_SESSION['ph_no']=$row['ph_no'];
  $_SESSION['addr']=$row['address'];
  header('location:home.php');
}
  else{
    echo("email id or password incorrect");
  }
}
}
?>