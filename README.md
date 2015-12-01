#WU TDD using PHP

## Preparation note
http://notepad.cc/wutdd

## Require
- PHP 5.6 http://php.net/downloads.php
- Composer https://getcomposer.org/
- PHPUnit 5.x https://phpunit.de/
- Github setup for [Windows](https://help.github.com/articles/set-up-git/#platform-windows) or for [Mac](https://help.github.com/articles/set-up-git/#platform-mac)

## How to play
- Clone this repository to your computer
- Refactor, change, update code, update test or whatever
- Have fun

## Useful command
####To run test
At project folder, run
```bash
phpunit --bootstrap <Source file name> <Test file name>
```
Example
```bash
phpunit --bootstrap captcha.php captchatest.php
```
#### To run with PHP built-in server
At project folder, run
``` bash
php -S localhost:5000 captcha.php
```
Access via browser 


![Screenshot] (https://raw.github.com/yapadubpadoo/wutddcaptcha/master/ScreenShot1.png)
