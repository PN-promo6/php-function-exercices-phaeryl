<?php

function decodeDNA($gen1, $gen2)
{
    $dna = "";
    for ($i = 0; $i < strlen($gen1); $i++) {
        if (strlen($gen1) == strlen($gen2)) {
            if ($gen1[$i] != $gen2[$i]) {
                $dna .= "^";
            } else {
                $dna .= " ";
            }
        }
    }
    return $dna;
}

echo decodeDNA('abcm', 'aaaa');
