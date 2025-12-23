<?php

require_once 'vendor/autoload.php';


use user\work7\EmailNotification;
use user\wrok7\SMSNotification;


$a = new EmailNotification();
echo $a->send("Привет,мир!");
echo "\nТип: " . $a->getType();
echo "\nСтатус:" . $a->getStatus();
echo "\n";

$sms = new SMSNotification();
echo $sms->send("Привет!");
echo "\nТип: " . $sms->getType();
echo "\nСтатус: " . $sms->getStatus();