<?php

require __DIR__ . '/vendor/autoload.php';

echo bin2hex(openssl_random_pseudo_bytes(128));
echo bin2hex(random_bytes(128));

// RandomLib
$randomLib = new \RandomLib\Factory();
$generator = $randomLib->getMediumStrengthGenerator();
$random = bin2hex($generator->generate(128));

echo $random;