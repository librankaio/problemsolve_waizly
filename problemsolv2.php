<?php
$arr = ['-4','3','-9','0','4','1'];
$total = count($arr);
$numbers = ["negatives" => 0, "positives" => 0, "zeros" => 0];

foreach ($arr as $v) {
    $v = (int) $v;
    $numbers[($v == 0)? 'zeros' : (($v < 0)? 'negatives': 'positives')]++;
}

echo "for positive: ". "{$numbers["positives"]}/$total=" .$numbers["positives"]/$total .PHP_EOL;
echo "for negative: ". "{$numbers["negatives"]}/$total=" .$numbers["negatives"]/$total .PHP_EOL;
echo "for zero: ". "{$numbers["zeros"]}/$total=" .$numbers["zeros"]/$total .PHP_EOL;