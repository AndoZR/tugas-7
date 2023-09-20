<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('NumToRomawi')) {
    function NumToRomawi($angka) {
        $romawi = '';
        $nilai = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );
        
        foreach ($nilai as $simbol => $nilai_angka) {
            while ($angka >= $nilai_angka) {
                $romawi .= $simbol;
                $angka -= $nilai_angka;
            }
        }
        
        return $romawi;
    }
}

if (!function_exists('RomToNum')) {
    function RomToNum($romawi) {
        $nilai = array(
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1
        );

        $angka = 0;
        $prevValue = 0;

        for ($i = strlen($romawi) - 1; $i >= 0; $i--) {
            $currentValue = $nilai[$romawi[$i]];
            if ($currentValue < $prevValue) {
                $angka -= $currentValue;
            } else {
                $angka += $currentValue;
            }
            $prevValue = $currentValue;
        }

        return $angka;
    }
}
