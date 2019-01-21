<html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
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
}</style>


</head>

<body link="#d9d9d9" vlink="#d9d9d9">

<font color="white" align="center">

<ul>
<li> <a class="h1"> CHINA BOWL</a>
<li><a href="home.php">HOME</a>
<li><a href="menu.php">MENU</a>
<li><a href="reserve.php">RESERVATIONS</a>
<li><a href="franch.php">LOCATE US</a>
<li><a class="active" href="about.php">ABOUT</a>
<li><a href="signup.php">SIGN UP</a>
<li> <a href="online.php" id="new">ORDER ONLINE</a> 
</ul><br><br><br>
 <?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
?>
<span style="font-family:'Footlight MT';font-size:20px; color:white;border-color:white;border-radius:5px; background-color:rgb(0,0,0); margin-left:1150px;">WELCOME <?php echo($_SESSION['fname']); ?> </span>
<form method="POST" action="logout.php"> <button name="logout" style="color:white;width:50px;background-color:rgb(0,0,0);font-size:10px;margin-left:1150px;">LOGOUT</button>
</form>
<?php }

else{
?>
 <span style="font-family:'Footlight MT';font-size:20px; background-color:rgb(0,0,0); margin-left:1100px;margin-top:20px;"><a href="login.php" >Already a member? LOG IN</a></span>
<?php }?>
<img src="about.jpg" height="400" width="1330">
</font>
<br>
<p class="transbox">
<img src="berco1.jpg" align="right" height=200 width=300>
<u>About Us</u><br>
China Bowl is one of the most distinguished names in the culinary world as far as Chinese & Thai food is concerned. Since its inception in the year 1982 it has become a name to reckon with. CHINA BOWL is known for its delectable Chinese & Thai cuisine and its service par excellence. 
"We believe in giving our customers finest quality ingredients cooked under hygienic conditions at a reasonable price. Besides Chinese, we have an exclusive range of Thai dishes with a separate section on our menu.<br>
<br>
<img src="berco.jpg" align="left" >

<u>Our History</u><br>'Thai Red Curry' and 'Thai rolls' are specially recommended. All our restaurants are designed by experts keeping in mind the look of a modern Chinese restaurant. All the restaurants have been designed aesthetically with Chinese paintings adorning the walls. Accolades like Viewers Recommended Food Joint by Master Chef Australia, Amongst the 101 Finest Restaurants by Mail Today and Times Service Excellence Award underlines the Customer Satisfaction that we have been enjoying for more than 3 decades. To quote Mr. Kabir Advani, MD – "China Bowl has always believed in providing great quality at a reasonable price. We use better ingredients as compared to other five star restaurants to serve our customers the best Chinese food."<br><br><br>
<br>

<img src="home3.jpg" align="right" height=200 width=300>
<u>Comfortable Ambience</u>
<br> With the most comforting atmosphere, our restaurant allows its guests to enjoy the peaceful environment along with the bliss of some light music, setting a romantic and a lovely mood for the guests.  <br><br><br><br>
</font>
</p>
</body>

</html>