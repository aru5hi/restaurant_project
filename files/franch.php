<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">

<style>
#crossfade {
   position:absolute;
}
#crossfade img {
    position:absolute;
    left:0;
    opacity: 1;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 1s ease-in-out;
    -o-transition: opacity 1s ease-in-out;
    -ms-transition: opacity 1s ease-in-out;    
    transition: opacity 1s ease-in-out;
}

@keyframes cf3FadeInOut {
  0% {
  opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}

#crossfade img.top {
animation-name: cf3FadeInOut;
animation-timing-function: ease-in-out;
animation-iteration-count: infinite;
animation-duration: 9s;
animation-direction: alternate;
}
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
</head>

<body link="#d9d9d9" vlink="#d9d9d9">

<font color="white" align="center">
<ul>
<li> <a class="h1"> CHINA BOWL</a>
<li><a href="home.php">HOME</a>
<li><a href="menu.php">MENU</a>
<li><a href="reserve.php">RESERVATIONS</a>
<li><a class="active" href="franch.php">LOCATE US</a>
<li><a href="about.php">ABOUT</a>
<li><a href="signup.php">SIGN UP</a>
<li> <a href="online.php" id="new">ORDER ONLINE</a>  
</ul>
</font>
<br>
<br><br>
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
<img src="location.jpg" height=400 width=1330>
<center class="transbox">

CHINA BOWL<br>
Food Court, 4th Floor,<br> 
Sahara Ganj Mall, Shahnajaf Road,<br>
Hazratganj, Lucknow - 226001<br>
Lucknow<br>
<button ><a href="https://www.google.com/maps?q=26.8543701,80.94488520000004&ll=26.8543701,80.94488520000004&z=17"> GET DIRECTIONS</a></button>
<br><br>
BOWL INDIRAPURAM<br>
Indirapuram Habitat Centre, <br>
Indirapuram, Ghaziabad<br>
Ghaziabad<br>
<button><a href="https://www.google.co.in/maps/dir/28.6196783,77.3705517/Jaypee+Institute+of+Information+Technology,+A-10,+Sector-62,+A+Block,+Block+A,+Industrial+Area,+Sector+62,+Noida,+Uttar+Pradesh+201309/@28.6254893,77.3681007,16z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x390ce551491b3ce7:0x7335d9fcfd4d9db0!2m2!1d77.372093!2d28.6304529!3e0"> GET DIRECTIONS</a></button>
<br><br>
SUBHASH NAGAR<br>
6/7 2nd floor Food Court Pacific Mall<br>
Subash Nagar Delhi 27<br>
New Delhi<br>
<button><a href="https://www.google.co.in/maps/place/Berco's+Garden/@28.6047017,77.338834,14z/data=!4m8!1m2!2m1!1sbercos!3m4!1s0x390ce50415555555:0x32cfc0ae1e0bbf52!8m2!3d28.5938571!4d77.3388634"> GET DIRECTIONS</a></button>
<br><br>
BOWL PITAMPURA<br>
Pankaj Arcade Plot No 18<br>
Road No. 44<br>
Rani Bagh<br> 
Commercial Complex Pitampura<br>
New Delhi<br>
<button><a href="https://www.google.co.in/maps/place/Berco's/@28.6886215,77.1325974,17z/data=!3m1!4b1!4m5!3m4!1s0x390d03c6a4b62547:0x22ff5c1efb709d32!8m2!3d28.6886215!4d77.1347861"> GET DIRECTIONS</a></button>
<br><br>
BOWL T3 TERMINAL<br>
Delhi Terminal 3<br>
New Udaan Bhawan Terminal 3<br>
 IGI Airport <br>Noida<br>
<button><a href="https://www.google.co.in/maps/place/Berco's/@28.632645,77.2150472,17z/data=!3m1!4b1!4m5!3m4!1s0x390cfd481edf07b5:0x6593e003928ebf4c!8m2!3d28.632645!4d77.2172359"> GET DIRECTIONS</a></button>
</center> 
        </ul>
  </font>
</body>
</html>