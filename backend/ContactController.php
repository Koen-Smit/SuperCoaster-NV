<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$title = $_POST['title'];
	$message = $_POST['message'];

	var_dump($_POST);
	file_put_contents("contacts.txt",

"------------------------------
Bericht van: " . $name . " (" . $email . ") " . $title .
" (" . $message . ")
------------------------------",

	FILE_APPEND
	);
	header("Location: ../contact.php?msg=Bericht+verstuurd");


?>