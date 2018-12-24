<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    $counter = 0;
    $a_length = strlen($a);
    $b_length = strlen($b);

    if ($a_length === $b_length) {
        for ($i = 0; $i < $a_length; $i++) {
            $a_subs = substr($a, $i, 1);
            $b_subs = substr($b, $i, 1);

            if ($a_subs === $b_subs) {
                $counter++;
            }
        }
    } else {
        return 'DNA strands must be of equal length.';
    }

    return $counter;
}
