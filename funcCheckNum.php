<?php
function isMultiple($number, $divisor = 2)
{
    return $number % $divisor === 0;
}
echo isMultiple(10) ? 'Yes' : 'No';
echo "\n";
echo isMultiple(10, 3) ? 'Yes' : 'No';
echo "\n";
echo isMultiple(9, 3) ? 'Yes' : 'No';