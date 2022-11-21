<?php

$start = 5; // variable untuk menentukan awal looping

## mulai melakukan looping dengan variable $i ##
for ($i = $start; $i > 0; $i--) {  // looping menggunakan decrement (pengurangan) jika variable $i lebih dari 0
    ## mulai melakukan looping di dalam looping dengan variable $j ##
    for ($j = $start; $j >= $i; $j--) { // looping menggunakan decrement (pengurangan) jika variable $i lebih dari sama dengan variable $i
        print '*'; // print *
    }
    ## selesai looping##
    print (php_sapi_name() == 'cli') ? "\n" : '<br />'; // print untuk memberi spasi kebawah dengan menggunakan pengondisian if ternary operator
    // function php_sapi_name() adalah untuk mendeteksi apakah script tersebut di jalankan menggukan CLI atau Web Browser
}
## selesai looping ##