<html>
<html>
<head>
<link href="menu.css" rel="stylesheet" type="text/css">
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
<ul style="position:fixed;">
<li> <a class="h1"> CHINA BOWL</a></li>
<li><a href="home.php">HOME</a></li>
<li><a class="active" href="menu.php">MENU</a></li>
<li><a href="reserve.php">RESERVATIONS</a></li>
<li><a href="franch.php">LOCATE US</a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="signup.php">SIGN UP</a></li>
<li><a href="online.php" id="new">ORDER ONLINE</a> </li>
</ul>
<br>
<br>
<br>
 <?php
session_start();
if(isset($_POST['logout'])){
    $_SESSION=[];
    session_destroy();
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
?>
<span style="font-family:'Footlight MT';font-size:20px; color:white;border-color:white;border-radius:5px; background-color:rgb(0,0,0); margin-left:1150px;">WELCOME <?php echo($_SESSION['fname']); ?> </span>
<form method="POST"> <button name="logout" style="color:white;width:50px;background-color:rgb(0,0,0);font-size:10px;margin-left:1050px;">LOGOUT</button>
</form>
<?php }

else{
?>
 <span style="font-family:'Footlight MT';font-size:20px; background-color:rgb(0,0,0); margin-left:1100px;margin-top:20px;"><a href="login.php" >Already a member? LOG IN</a></span>
<?php } ?>
<img src="home2.jpg" height="400" width="1330">
<b>
<ol>
<li><a href="#Soups">Soups</a>
<li><a href="#Appetizers">Appetizers</a>
<li><a href="#Momos">Momos</a>
<li><a href="#Main">Main Course</a>
<li><a href="#Rice">Rice</a>
<li><a href="#Noodles">Noodles</a>
</ol>
</b>



<pre class="transbox">
<br><u><a name="Soups">Soup</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
    Manchow soup 			 Rs. 145  
<br>Hot and Sour soup     	      Rs. 195  
<br>  Talumin soup     		      Rs. 190  
<br>  Thupka Veg  		      Rs. 115  
<br>Tom kha Soup Veg       	Rs. 99  
<br><u> <a>Non Veg</a></u>
    Manchow soup(Non veg) 	   Rs. 265  
<br>  Hot and Sour soup(Non Veg)    Rs. 279  
<br>  Talumin soup(Non Veg)  	      Rs. 185 
<br>  Thupka Veg(Non Veg)  	      Rs. 146  
<br>  Tom kha Soup Veg(Non Veg)  Rs. 199  
<br><u><a name="Appetizers">Appetizers</u></a><hr size=5 color=red style='display:inline-block; width:50%;'>
<a>Veg</a>
Vegitable Spring Roll  			 Rs. 265  
<br> Potato Crispi Chilli  			 Rs. 114  
<br> Mushroom Button Tangy  		Rs. 100  
<br>  Crispy Honey Potato  		 Rs. 167  
<br>  Paneer Chilli Dry 		  	 Rs. 149  <br>
 <a><u><a>Non Veg</a></u></a>
  Chicken Spring Roll  			 Rs. 299  
<br>  Chicken Juicy Drumsticks  	 Rs. 278  
<br>  Chicken Chilli Garlic Crispy  	 Rs. 214  
<br>  Chicken SIngapore Wok  		 Rs. 244  
<br>  Prawns Singapore Wok  		 Rs. 298  
<br><u><a name="Momos">Momos</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
  Veg Dum Sum(Momos)  		 Rs. 265  
<br> Veg Pan Fried Dum Sum  	 	Rs. 265 <br> 
<a> <u><a>Non Veg</a></u></a>
Chicken Dum Sum  		 	Rs. 145  
<br>Chicken Pan Fried Dum Sum  	Rs. 145  
<br><u><a name="Main">Main Course</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
<u><a>Veg</a></u>
Veg Manchurian Gravy		Rs. 156  
<br>Baby Corn Broccoli  			Rs. 198  
<br>  Vegetables In  				Rs. 182  
<br>  Baby Corn Broccoli With Paneer  Rs. 145  
<br>  Mixed Vegetables In Choice Of Sauce Rs. 199<br>  
 <u><a>Non Veg</a></u>
Chicken Five Spice  			Rs. 286  
<br> Chicken Manchurian Gravy  	 Rs. 216  
<br>  Chicken In Black Pepper Sauce   Rs. 257  
<br> Chicken In Choice Of Sauce      	Rs. 298  
<br>  Chilli Chicken Gravy  		Rs. 267  
<br><u><a name="Rice">Rice</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
Steamed Rice  	        		Rs. 135  
<br>  Vegetable Fried Rice  			Rs. 145  
<br>  Corn Fried Rice  				Rs. 189  
<br>  Garlic Steamed Rice  			Rs. 135  
<br>Vegetable Chilli Garlic Rice  	  Rs. 114  <br>
 <u><a>Non Veg</a></u> 
Chicken Fried Rice  			 Rs. 258  
<br>  Chicken Chilli Garlic Rice  	 Rs. 287  
<br>  Mix Treat Fried Rice  		 Rs. 243  
<br>  Chicken Minched Chilli Fried Rice  Rs. 288  
<br>  Chicken Sanghai Rice  		 Rs. 279  
<br><u><a name="Noodles">Noodles</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
Vegetable Choupsy  			Rs. 156  
<br>  Vegetable Chilli Garlic Noodle    Rs. 113  
<br>  Vegetable Thai Noodle  		Rs. 187  
<br>  Vegetable American Choupsy  	Rs. 169  
<br>  Veg Pan Fried Noodles  		Rs. 125  
 <u><a>Non Veg</a></u> 
Chicken Choupsy  			Rs. 280  
<br>  Chicken Hakka Noodles  		Rs. 260  
<br>  Mix Treat Noodles  			Rs. 245  
<br>  Chicken Path Thai Noodles  	Rs. 299  
<br>  Chicken Singapore Style Noodle    Rs. 314

  
</pre>
