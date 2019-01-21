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
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="JavaScript" src="online.js"></script>
<html>

<head>
<link rel="stylesheet" type="text/css" href="online.css">
</head>
<body link="#d9d9d9" vlink="#d9d9d9">
<font color="white" align="center">
<ul>
<li> <a class="h1"> CHINA BOWL</a>
<li><a href="home.php">HOME</a>
<li><a href="menu.php">MENU</a>
<li><a href="reserve.php">RESERVATIONS</a>
<li><a href="franch.php">LOCATE US</a>
<li><a href="about.php">ABOUT</a>
<li><a href="signup.php">SIGN UP</a>
</ul>
</font>
<br><br><br> 
<?php
if(isset($_POST['logout'])){
    $_SESSION=[];
    session_destroy();
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
?>
<span style="font-family:'Footlight MT';font-size:20px; color:white;border-color:white;border-radius:5px; background-color:rgb(0,0,0); margin-left:1150px;">WELCOME <?php echo($_SESSION['fname']); ?> </span>
<form method="POST"> <button name="logout" style="color:white;width:50px;background-color:rgb(0,0,0);font-size:10px;margin-left:1150px;">LOGOUT</button>
</form>
<?php
}
else{
?>
<span style="font-family:'Footlight MT';font-size:20px; background-color:rgb(0,0,0); margin-left:1100px;margin-top:20px;"><a href="login.php" >Already a member? LOG IN</a></span>
<?php } ?>
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




<br><br>
<form method="POST" action="check.php" class="transbox1">YOUR ORDER:<br> <div id="cart"></div> 
	<button id="click">CHECK OUT</button><br> </form><button id="reset" class="transbox1" style="width:100px;margin-left:1170px;border:solid 3px white;height:30px;border-radius:50px;padding:2px;" >RESET</button>
<center class="transbox">

<u>Get your favourite dishes while sitting at home.</u><br>
<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
?>
<form method ="POST" id="details">
Please enter the following details before you order:<BR>
Name:<?php echo($_SESSION['fname']." ".$_SESSION['lname']); ?><br>
Email id: <input required type="text" name="email" value="<?php echo($_SESSION['email']);?>"><br>
Mobile no:<input required type="text" name="phone" value="<?php echo($_SESSION['ph_no']);?>"><br>
Address: <textarea required name="addr" row=5 col=10><?php echo($_SESSION['addr']);?></textarea><br>
PAYMENT TYPE:<select required name='S'><option></option><option>Debit/Credit card</option><option>cash on delivery</option><option>net banking</option></select><br>
DELIVERY TYPE:<select required name='S1'><option></option><option>PICK UP</option><option>HOME DELIVERY</option></select>
<input type='submit' id="submit"><br>
</form>
<?php
}
else{
?>
<br>

<form method ="POST"  id="details">
Not a member? <a href='signup.php'>Signup here</a><br>OR<br>
Please enter your details before you order:<BR>
Name:<input type="text" name="name" value=""><br>
Email id: <input type="text" name="email" value=""><br>
Mobile no:<input type="text" name="phone" value=""><br>
Address: <textarea required name="addr"></textarea><br>
PAYMENT TYPE:<select name='S' required><option></option><option>Debit/Credit card</option><option>cash on delivery</option><option>net banking</option></select><br>

<input type='submit' id='submit'><br>
<?php 
} 
?>
</form>

</center>



<pre class="transbox">
	<center>
<br><u><a name="Soups">Soup</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
Manchow soup 			 Rs. 145 <button value="Manchow soup veg" id="b1"> + </button><br>
Hot and Sour soup     	      Rs. 195  <button value="Hot-sour Soup veg" id="b2"> + </button><br>
Talumin soup     		      Rs. 190  <button value="Talumin Soup" id="b3"> + </button><br>
Thupka Veg  		      Rs. 115  <button value="Thupka soup" id="b4"> + </button><br>
Tom kha Soup Veg       	Rs. 99  <button value="Tom Kha Soup" id="b5"> + </button><br>
<u> <a>Non Veg</a></u>
Manchow soup(Non veg) 	   Rs. 265 <button value="Manchow soup non veg" id="b6"> + </button><br> 
Hot and Sour soup(Non Veg)    Rs. 279  <button value="H&S soup non veg" id="b7"> + </button><br>
Talumin soup(Non Veg)  	      Rs. 185 <button value="Talumin non veg" id="b8"> + </button><br>
Thupka(Non Veg)  	      Rs. 146  <button value="Thupka non veg" id="b9"> + </button><br>
Tom kha Soup(Non Veg)  Rs. 199  <button value="Tom Kha veg" id="b10"> + </button><br>
<u><a name="Appetizers">Appetizers</u></a><hr size=5 color=red style='display:inline-block; width:50%;'>
<u><a>Veg</a></u>
Vegitable Spring Roll  			 Rs. 265  <button value="Veg Spring roll" id="b11"> + </button><br>
Potato Crispi Chilli  			 Rs. 114  <button value="Potato Crispi chilli" id="b12"> + </button><br>
Mushroom Button Tangy  		Rs. 100  <button value="Mushroom Button Tangy" id="b13"> + </button><br>
Crispy Honey Potato  		 Rs. 167  <button value="Crispy Honey Potato" id="b14"> + </button><br>
Paneer Chilli Dry 		  	 Rs. 149  <button value="Paneer chilli Dry" id="b15"> + </button><br>
 <a><u><a>Non Veg</a></u></a>
Chicken Spring Roll  			 Rs. 299  <button  value="Chicken Spring Roll" id="b16"> + </button><br>
Chicken Juicy Drumsticks  	 Rs. 278  <button value="Chicken Juicy Drumsticks" id="b17"> + </button><br>
Chicken Chilli Garlic Crispy  	 Rs. 214  <button value="Chicken Chilli Garlic Crispy" id="b18"> + </button><br>
Chicken SIngapore Wok  		 Rs. 244  <button value="Chicken Singapore Wok" id="b19"> + </button><br>
Prawns Singapore Wok  		 Rs. 298  <button value="Prawns Singapore Wok" id="b20"> + </button><br>
<u><a name="Momos">Momos</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
Veg Dim Sum(Momos)  		 Rs. 265  <button value="Veg Dim Sum" id="b21"> + </button><br>
Veg Pan Fried Dum Sum  	 	Rs. 265 <button value="Veg Pan Fried Dim sum" id="b22"> + </button><br> 
<a> <u><a>Non Veg</a></u></a>
Chicken Dim Sum  			Rs. 145  <button value="Chicken Dim sum" id="b23"> + </button><br>
Chicken Pan Fried Dum Sum  	Rs. 145  <button value="Chicken pan fried dim sum" id="b24"> + </button><br>
<br><u><a name="Main">Main Course</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
<u><a>Veg</a></u>
Veg Manchurian Gravy		    Rs. 156  <button value="Veg Manchurian" value="" id="b25"> + </button><br>
Baby Corn Broccoli  			Rs. 198  <button value="Baby corn brocolli" id="b26"> + </button><br>
Vegetables In Schezwan Sauce	Rs. 182  <button value="Vegetables in Schezwan sauce" id="b27"> + </button><br>
Baby Corn Broccoli With Paneer  Rs. 145  <button value="Baby corn brocolli with Paneer" id="b28"> + </button><br>
Mixed Vegetables In Choice Of Sauce Rs. 199<button value="Mixed Vegetables With Sauce" id="b29"> + </button><br>
 <u><a>Non Veg</a></u>
Chicken Five Spice  			Rs. 286  <button value="Chicken Five Spice" id="b30"> + </button><br>
Chicken Manchurian Gravy  	 Rs. 216  <button value="Chicken Manchurian Gravy" id="b31"> + </button><br>
Chicken In Black Pepper Sauce   Rs. 257  <button value="Chicken In Black Pepper Sauce" id="b32"> + </button><br>
Chicken In Choice Of Sauce      	Rs. 298  <button value="" id="b33"> + </button><br>
Chilli Chicken Gravy  		Rs. 267  <button value="" id="b34"> + </button><br>
<u><a name="Rice">Rice</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
Steamed Rice  	        		Rs. 135  <button value="" id="b35"> + </button><br> 
Vegetable Fried Rice  			Rs. 145<button value="" id="b36"> + </button><br>  
Corn Fried Rice  				Rs. 189  <button value="" id="b37"> + </button><br>
Garlic Steamed Rice  			Rs. 135  <button value="" id="b38"> + </button><br>
Vegetable Chilli Garlic Rice  	  Rs. 114  <button value="" id="b39"> + </button><br>
 <u><a>Non Veg</a></u> 
Chicken Fried Rice  			 Rs. 258  <button value="" id="b40"> + </button><br>
Chicken Chilli Garlic Rice  	 Rs. 287  <button value="" id="b41"> + </button><br>
Mix Treat Fried Rice  		 Rs. 243  <button value="" id="b42"> + </button><br>
Chicken Minched Chilli Fried Rice  Rs. 288  <button value="" id="b43"> + </button><br>
Chicken Sanghai Rice  		 Rs. 279  <button value="" id="b44"> + </button><br>
<u><a name="Noodles">Noodles</a></u><hr size=5 color=red style='display:inline-block; width:50%;'>
 <u><a>Veg</a></u>
Vegetable Choupsy  			Rs. 156  <button value="" id="b45"> + </button><br>
Vegetable Chilli Garlic Noodle    Rs. 113  <button value="" id="b46"> + </button><br>
Vegetable Thai Noodle  		Rs. 187  <button value="" id="b47"> + </button><br>
Vegetable American Choupsy  	Rs. 169  <button value="" id="b48"> + </button><br>
Veg Pan Fried Noodles  		Rs. 125  <button value="" id="b49"> + </button><br>
 <u><a>Non Veg</a></u> 
Chicken Choupsy  			Rs. 280  <button value="" id="b50"> + </button><br>
Chicken Hakka Noodles  		Rs. 260  <button value="" id="b51"> + </button><br>
Mix Treat Noodles  			Rs. 245  <button value="" id="b52"> + </button><br>
Chicken Path Thai Noodles  	Rs. 299  <button value="" id="b53"> + </button><br>
Chicken Singapore Style Noodle    Rs. 314<button value="" id="b54"> + </button> <br> 

</form>
</pre> 
