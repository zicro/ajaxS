<?php

$username = strip_tags(addslashes($_POST['user']));
$password = strip_tags(addslashes($_POST['pass']));

if (isset($username) && isset($password)){
	
	if (empty($username))
		echo "You Should Enter a Username";
	
	else if (empty($password))
		echo "You Should Enter a Password";
	else
		echo "All things Are Write";
}

?>