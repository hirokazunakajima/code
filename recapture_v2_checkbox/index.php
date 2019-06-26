<?php
/*
	google reCapture v2 checkbox
	https://www.google.com/recaptcha/intro/v3.html

	site key
	6LczvqoUAAAAAKuwKMhwasfqzr1X_lrXHY9ax14f

	seacret key
	6LczvqoUAAAAAJALefEuFclOIuvJNY5B8kR-qwYG

	registered domain on google recapture setting
	hirokazunakajima.local
	hirokazunakajima.com
*/


?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>reCapture v2 checkbox</title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>

	<form action="complete.php" method="POST">
	      <input type="text" name="name" placeholder="your name">
	      <div id="recapture"></div>
	      <button type="submit" name="button" disabled>送信</button>
	</form>

	<script type="text/javascript">
	  var successCallback = function(response){
	  	if(response != ""){
			$(":[type=submit").removeAttr("disabled");
		}
	  }

	  var onloadCallback = function() {
	    grecaptcha.render('recapture', {
	          'sitekey' : '6LczvqoUAAAAAKuwKMhwasfqzr1X_lrXHY9ax14f',
	          'callback' : successCallback
	        });
	  };
	</script>
	
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

</body>
</html>