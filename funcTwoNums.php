<?php
function getMax($a, $b)
{
    return ($a > $b) ? $a : $b;
}
function power($a, $b)
{
    return pow($a, $b);
}
function average($a, $b)
{
    return ($a + $b) / 2;
}
$a = 5;
$b = 3;
echo "Більше з 2-х чисел: " . getMax($a, $b) . "\n";
echo "Перше число підняте до степені другого числа: " . power($a, $b) . "\n";
echo "Середнє арифметичне 2-х чисел: " . average($a, $b) . "\n";