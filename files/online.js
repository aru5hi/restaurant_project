$(document).ready(function(){
	alert("Please fill your details before you start ordering");
	$("#submit").click(function(){
  var data = $("#details").serialize();
  $.ajax({
         data: data,
         type: "post",
         url: "order.php",
         success: function(data){
         	alert("Details saved!");
         	
         }
     });
  $("#details").html("YOUR DETAILS ARE SAVED<br> You can start ordering!");
});
 });
var b= new Array(54).fill(0);
$(document).ready(function(){

$("#b1").click(function(){

	b[0]=b[0]+1;
if(b[0]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='a'>1</b><br>");
	}
else{
	$("#a").html(b[0]);
}
});
$("#b2").click(function(){
	b[1]=b[1]+1;
if(b[1]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='b'>1</b><br>");
	}
else{
	$("#b").html(b[1]);
}
});
$("#b3").click(function(){
	b[2]=b[2]+1;
if(b[2]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='c'>1</b><br>");
	}
else{
	$("#c").html(b[2]);
}
});
$("#b4").click(function(){
	b[3]=b[3]+1;
if(b[3]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='d'>1</b><br>");
	}
else{
	$("#d").html(b[3]);
}
});
$("#b5").click(function(){
	b[4]=b[4]+1;
if(b[4]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='e'>1</b><br>");
	}
else{
	$("#e").html(b[4]);
}
});

$("#b6").click(function(){
	b[5]=b[5]+1;
if(b[5]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='a1'>1</b><br>");
	}
else{
	$("#a1").html(b[5]);
}
});

$("#b7").click(function(){
	b[6]=b[6]+1;
if(b[6]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='xb1'>1</b><br>");
	}
else{
	$("#xb1").html(b[6]);
}
});
$("#b8").click(function(){
	b[7]=b[7]+1;
if(b[7]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='c1'>1</b><br>");
	}
else{
	$("#c1").html(b[7]);
}
});

$("#b9").click(function(){
	b[8]=b[8]+1;
if(b[8]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='d1'>1</b><br>");
	}
else{
	$("#d1").html(b[8]);
}
});

$("#b10").click(function(){
	b[9]=b[9]+1;
if(b[9]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='e1'>1</b><br>");
	}
else{
	$("#e1").html(b[9]);
}
});

$("#b11").click(function(){
	b[10]=b[10]+1;
if(b[10]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='a2'>1</b><br>");
	}
else{
	$("#a2").html(b[10]);
}
});
$("#b12").click(function(){
	b[11]=b[11]+1;
if(b[11]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='xb2'>1</b><br>");
	}
else{
	$("#xb2").html(b[11]);
}
});

$("#b13").click(function(){
	b[12]=b[12]+1;
if(b[12]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='c2'>1</b><br>");
	}
else{
	$("#c2").html(b[12]);
}
});

$("#b14").click(function(){
	b[13]=b[13]+1;
if(b[13]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='d2'>1</b><br>");
	}
else{
	$("#d2").html(b[13]);
}
});
$("#b15").click(function(){
	b[14]=b[14]+1;
if(b[14]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='e2'>1</b><br>");
	}
else{
	$("#e2").html(b[14]);
}
});

$("#b16").click(function(){
	b[15]=b[15]+1;
if(b[15]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='a3'>1</b><br>");
	}
else{
	$("#a3").html(b[15]);
}
});
$("#b17").click(function(){
	b[16]=b[16]+1;
if(b[16]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='xb3'>1</b><br>");
	}
else{
	$("#xb3").html(b[16]);
}
});
$("#b18").click(function(){
	b[17]=b[17]+1;
if(b[17]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='c3'>1</b><br>");
	}
else{
	$("#c3").html(b[17]);
}
});
$("#b19").click(function(){
	b[18]=b[18]+1;
if(b[18]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='d3'>1</b><br>");
	}
else{
	$("#d3").html(b[18]);
}
});
$("#b20").click(function(){
	b[19]=b[19]+1;
if(b[19]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='e3'>1</b><br>");
	}
else{
	$("#e3").html(b[19]);
}
});

$("#b21").click(function(){
	b[20]=b[20]+1;
if(b[20]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='a4'>1</b><br>");
	}
else{
	$("#a4").html(b[20]);
}
});

$("#b22").click(function(){
	b[21]=b[21]+1;
if(b[21]==1){
$("#cart").append("<b>"+$(this).val()+"-</b><b id='xb4'>1</b><br>");
	}
else{
	$("#xb4").html(b[21]);
}
});
});
$(document).ready(function(){
$("#reset").click(function(){
	b.fill(0);
	$("#cart").empty();
});	
});

