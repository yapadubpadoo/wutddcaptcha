<?php
//php -S localhost:8000 test.php
require_once 'random.php';
require_once 'captcha.php';
$captcha = new Captcha();
$captcha->generate(new Random());
echo $captcha->getQuestion() . "\n";

