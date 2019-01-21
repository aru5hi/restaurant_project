$(document).ready(function(){
$("#x").change(function(){
if($("#x").val()=="Group"){
	$("#party").html("party type:<input type='text' name='pt' required><br>");
			}
else{
	$("#party").html("");
}
		});
	});
