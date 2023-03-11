<?php

$tutionFee = 100;

$comission = (20000<$tutionFee)? 0.25*$tutionFee:
((10000<$tutionFee && 20000>=$tutionFee)? 0.2*$tutionFee:
((7000>=$tutionFee && 1000<=$tutionFee)? 0.5*$tutionFee:
("Invalid Payment")));
echo "Tution Fee of Rs {$tutionFee} commission of Rs ".$comission;



