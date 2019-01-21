<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<style>
button {
    background-color:black;
    border: 5px;
    border-color=white;
    color: white;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
font-family:"Footlight MT";}
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
font-size:25px;
}
</style>

<body link="#d9d9d9" vlink="#d9d9d9">
<br><br><br>
<?php


session_start();
if(isset($_POST['logout'])){
    $_SESSION=[];
    session_destroy();
}
if(isset($_SESSION['loggedin'])){ 
?>
<span style="font-family:'Footlight MT';font-size:20px; color:white;border-color:white;border-radius:5px; background-color:rgb(0,0,0); margin-left:1150px;">WELCOME <?php echo($_SESSION['fname']); ?> </span>
<form method="POST" > <button name="logout" style="color:white;width:50px;background-color:rgb(0,0,0);font-size:10px;margin-left:1150px;">LOGOUT</button>
</form>
<?php


 }

else{
?>
 <span style="font-family:'Footlight MT';font-size:20px; background-color:rgb(0,0,0); margin-left:1100px;margin-top:20px;"><a href="login.php" >Already a member? LOG IN</a></span>
<?php } ?>

<div id="crossfade" style:"margin:auto;">
<img class="bottom" height=400 width=1330 src="home3.png">
<img class="top" height=400 width=1330 src="home2.jpg">
</div><br>
<font color="white" align="center">

<ul>
<li> <a class="h1"> CHINA BOWL</a>
<li><a class="active" href="home.php">HOME</a>
<li><a href="menu.php">MENU</a>
<li><a href="reserve.php">RESERVATIONS</a>
<li><a href="franch.php">LOCATE US</a>
<li><a href="about.php">ABOUT</a>
<li><a href="signup.php">SIGN UP</a>

<li> <a href="online.php" id="new">ORDER ONLINE</a>

</ul>

</font><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p class="transbox">
<img src="res.jpg" align="right" height=200 width=300>
<u>Discover our restaurants</u><br>
Trendy locals, genuine flavors, authentic hospitality: 
the signs of recognition of our Chinese restaurant. This loft has been cleverly redesigned to 
communicate what is Oriental cuisine for us: a world in which 
coexist with ancient recipes and innovative dishes.<br>
<br><br><br>
<img src="kitch.jpg" align="left" >

<u>Our Kitchen</u><br>The new face of Japanese and Chinese cuisine respecting tradition: 
in other words, the specialties of Eastern countries inspire the 
creative proposals of chefs in the sign of genuineness and delicacy.
Let yourself be tempted by fusion cuisine, your palate will be grateful to you.<br><br><br><br>
<br>

<img src="home3.jpg" align="right" height=200 width=300>
<u>Comfortable ambience</u>
<br> With the most comforting atmosphere, our restaurant allows its guests to enjoy the peaceful environment along with the bliss of some light music, setting a romantic and a lovely mood for the guests.  <br><br><br><br>
</font>
</p>


</body>

</html>