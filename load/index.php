<!DOCTYPE html>
<html>
<head>
	<title>JQuery</title>
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript">
$(document).ready(function (){
	
	$('a').click(function (){
		$(".load").load("test.html");
		});
		//$('a').hide();
		return false; // use it to not reLoad the page (not refresh the navigator)
		
	});
</script>
</head>
<body>


	<div class="load"></div>
<a href="#">Click Me !!</a>
</body>
</html>