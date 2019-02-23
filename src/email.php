<?php
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<p>Please check the reCAPTCHA form.</p> <button onclick="history.go(-1);">Back </button>';
          exit;
        }
    
        $secretKey = "<secret_key>";
        $ip = $_SERVER['REMOTE_ADDR'];                $response=file_get_contents("https://www.recaptcha.net/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        
        if(intval($responseKeys["success"]) !== 1) {
          echo '<p>You failed the reCAPTCHA test.</p> <button onclick="history.go(-1);">Back </button>';
        } else {
          echo '<p><a href="ahammel87@gmail.com">ahammel87@gmail.com</a></p>';
        }
?>
