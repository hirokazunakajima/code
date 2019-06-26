<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Complete</title>
</head>
<body>
<?php

    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        //your site secret key
        $secret = '6LczvqoUAAAAAJALefEuFclOIuvJNY5B8kR-qwYG';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

        $responseData = json_decode($verifyResponse);

        /*
        	var_dump($responseData);
        	
			object(stdClass)[1]
              public 'success' => boolean true
              public 'challenge_ts' => string '2019-06-26T09:46:22Z' (length=20)
              public 'hostname' => string 'hirokazunakajima.local' (length=22)
        */

        if(	$responseData->success ){
            echo("Working Fine");
            exit;
        }else{
            echo("No valid Key");
            exit;
       }
    } else {
        echo("Not Working Captcha");
        exit;
    }
    ?>

</body>
</html>