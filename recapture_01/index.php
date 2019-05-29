<?php
/*
	google reCapture v3
	https://www.google.com/recaptcha/intro/v3.html

	site key
	6Lej6qUUAAAAAJWWebpJ7RLnvDW69p96mu-AEiCz

	seacret key
	6Lej6qUUAAAAAIQNivqKNljy3rAWK3XCTDEBQqdl

	domain
	hirokazunakajima.local
	hirokazunakajima.com
*/


?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>reCapture v3</title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>
<form action="complete.php" method="POST">
	<input type="text" name="name" placeholder="your name">
	<button type="submit">送信</button>
</form>
<script src="https://www.google.com/recaptcha/api.js?render=6Lej6qUUAAAAAJWWebpJ7RLnvDW69p96mu-AEiCz"></script>

<script>
	$("form").submit(function(e){
		e.preventDefault();
		grecaptcha.ready(function() {
		  grecaptcha.execute('6Lej6qUUAAAAAJWWebpJ7RLnvDW69p96mu-AEiCz', {action: 'test_action'}).then(function(token) {
		  		$('form').prepend('<input type="hidden" name="g-recaptcha-token" value="' + token + '">');
                $('form').unbind('submit').submit();
		  });
		});

	});
</script>
</body>
</html>