<!DOCTYPE html>
<html>
<head>
	<title>JQuery</title>
<script type="text/javascript" src="../../jquery.js"></script>
<script type="text/javascript">
$(document).ready(function (){
	
	$("#frm").submit(function (){
		
		var t = $("#title").val();
		var c = $("#content").val();
		var sData = {
			"title":t,
			"content":c
		};
		
		$.ajax({
			url: "test.php",
			type: "POST",
			data:sData,
			beforeSend: function (){
				$('.msg').text("Loading ...");
			},
			statusCode: {
				404: function (){
					$('.msg').text("Page Not Found ..");
				},
				403: function (){
					$(".msg").text("Bad Request ..");
				}
			},
			success: function (data){
				$(".msg").text(data);
			},
			complete: function (){
				$(".msg").append(" <br> Request is Completed .. the End");
			}
		});
		return false; // use it to not reLoad the page (not refresh the navigator)
		
	});
});
</script>
</head>
<body>


	<div class="msg"></div>
<form id="frm">
<input type="text" id="title"/><br>
<input type="text" id="content"/><br>
<input type="submit" value="Go .."/>
</form>
</body>
</html>