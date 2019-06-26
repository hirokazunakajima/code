<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Complete</title>
</head>
<body>
<?php
	// var_dump($_POST);
    if(isset($_POST['g-recaptcha-token']) && !empty($_POST['g-recaptcha-token'])) {
        //your site secret key
        $secret = '6Lej6qUUAAAAAIQNivqKNljy3rAWK3XCTDEBQqdl';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-token']);

        $responseData = json_decode($verifyResponse);
        /*
        	var_dump($responseData);
        	
			object(stdClass)[1]
			  public 'success' => boolean true
			  public 'challenge_ts' => string '2019-05-29T13:46:44Z' (length=20)
			  public 'hostname' => string 'hirokazunakajima.local' (length=22)
			  public 'score' => float 0.9
			  public 'action' => string 'test_action' (length=11)
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