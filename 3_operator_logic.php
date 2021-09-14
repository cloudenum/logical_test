<?php 

/**
 * Divide $a with $b
*/
function div($a, $b)
{
    $q = 0;
    $r = 0;
    $a_bin = strrev(str_pad(decbin($a), 32, '0', STR_PAD_LEFT));
    
    for ($i= strlen($a_bin) - 1 ; $i >= 0; $i--) { 
        $r *= 2;
        $r_bin = strrev(str_pad(decbin($r), 32, '0', STR_PAD_LEFT));
        $r_bin[0] = $a_bin[$i];
        $r = bindec(strrev($r_bin));
        
        if ($r >= $b) {
            $r = $r - $b;
            $q_bin = strrev(str_pad(decbin($q), 32, '0', STR_PAD_LEFT));
            $q_bin[$i] = '1';
            $q = bindec(strrev($q_bin));
        }
    }

    return $q;
}

echo div(12, 2);
