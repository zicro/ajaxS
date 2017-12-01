<!DOCTYPE html>
<html>
<head>
	<title>JQuery Send Form Data Via Post Method</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function (){
	
	$("#frm").submit(function (){
		
		var us = $("#user").val();
		var pa = $("#pass").val();
		var s = {
			"user":us,
			"pass":pa};
		
		$.post("check.php",s,function (data){
			
			$(".msg").text(data);
		});
		
		return false;
	});
});
</script>
</head>
<body>


	<div class="msg"></div>
<form id="frm">
username : <input type="text" id="user"/><br>
Password : <input type="password" id="pass"/><br>
<input type="submit" value="Login" />
</form>
</body>
</html>