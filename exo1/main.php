<?php
function sumAll($n)
{
    $result = 0;
    for ($i = 0; $i < $n; $i++) {
        $result += $i;
    }
    return $result;
}
echo sumAll(10);
