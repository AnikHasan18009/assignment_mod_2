<?php

$tuitionFee=21117;
$commission=($tuitionFee>=20000)? "For {$tuitionFee} tuition fee commission = ".$tuitionFee*0.25 :(($tuitionFee<20000 && $tuitionFee>=10000)? "For {$tuitionFee} tuition fee commission = ".$tuitionFee*0.20:(($tuitionFee>= 7000 && $tuitionFee<10000)? "For {$tuitionFee} tuition fee commission = ".$tuitionFee*0.15:"Data is invalid."));
echo $commission;