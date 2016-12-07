<?php
error_reporting(E_ALL);

include('../vendor/autoload.php');

session_start();

$captcha = new \KCAPTCHA\KCAPTCHA();
$captcha->captcha();

if ($_REQUEST[session_name()]) {
    $_SESSION['captcha_keystring'] = $captcha->getKeyString();
}
