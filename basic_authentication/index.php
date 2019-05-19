<?php

	$usr = @$_SERVER['PHP_AUTH_USER'];
	$pass = @$_SERVER['PHP_AUTH_PW'];

	if(! $usr || ! $pass){
		header('HTTP/1.1 401 Unauthorized');
		header('WWW-Authenticate: Basic realm="Basic Authentication Sample"');
		echo "ユーザー名とパスワードが必要です";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	ユーザ名:<?php echo htmlspecialchars($usr, ENT_NOQUOTES, 'UTF-8'); ?><BR>
	パスワード:<?php echo htmlspecialchars($pass, ENT_NOQUOTES, 'UTF-8'); ?> <BR>
</body>
