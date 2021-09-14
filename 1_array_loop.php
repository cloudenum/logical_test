<?php

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$a = 1;
echo "<pre>";
while ($a <= 5) {
    echo $aplikasi[$a++] . "\n";
}
echo "</pre>";
