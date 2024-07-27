<?php
function removeDigit($number, $digitToRemove)
{
    $numberStr = strval($number);
    $resultStr = str_replace($digitToRemove, '', $numberStr);
    $result = intval($resultStr);
    return $result;
}
$number = 123456789;
$digitToRemove = 3;
$newNumber = removeDigit($number, $digitToRemove);
echo $newNumber;