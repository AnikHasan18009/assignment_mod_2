<?php

$tutionFee=33021;
$commission=($tutionFee>=20000)? "Commission = ".(float)$tutionFee*0.25 :(($tutionFee<20000 && $tutionFee>=10000)? "Commission = ".(float)$tutionFee*0.20:(($tutionFee>= 7000 && $tutionFee<10000)? "Commission = ".(float)$tutionFee*0.15:"Data is invalid."));
echo $commission;