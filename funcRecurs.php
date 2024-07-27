<?php
function countdown($number)
{
    if ($number > 0)
    {
        echo $number . "\n";
        countdown($number - 1);
    }
}
countdown(10);