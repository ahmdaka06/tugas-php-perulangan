<?php

## memulai perulangan ##
for ($i = 0; $i < 5; $i++) {
    $increment = 0; // set variable $increment ke 0
    ## memulai perulangan di dalam perulangan ##
    for ($j = 0; $j <= $i; $j++) { // variable #j memulai dari 0 dengan $j kurang dari sama dengan $i
        print $increment . ' '; // print variable $increment
        $increment += 2; // tambah sama dengan 2 pada variabel $increment
    }
    ## selesai perulangan dengan variable $j ##
    print (php_sapi_name() == 'cli') ? "\n" : '<br />'; // print untuk memberi spasi kebawah dengan menggunakan pengondisian if ternary operator
    // function php_sapi_name() adalah untuk mendeteksi apakah script tersebut di jalankan menggukan CLI atau Web Browser
}
## selesai perulangan dengan variable $i ##