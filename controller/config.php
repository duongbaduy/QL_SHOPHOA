<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("988343323625-u739gm7n5p5bh923aivna4fitp7ep525.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Vicode Media Login");
$gClient->setRedirectUri("http://localhost/SHOPHOA_NHOM05/controller/controller.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
// login URL
$login_url = $gClient->createAuthUrl();
?>