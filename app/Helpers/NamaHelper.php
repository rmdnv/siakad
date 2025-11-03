<?php
namespace App\Helpers;

class NamaHelper
{
    public static function singkatNama($namaLengkap)
    {
        $parts  = explode(" ", trim($namaLengkap));
        $jumlah = count($parts);

        if ($jumlah < 2) {
            return $namaLengkap;
        }

        $hasil = $parts[0] . " " . $parts[1];

        if ($jumlah >= 3) {
            $hasil .= " " . strtoupper($parts[2][0]) . ".";
        }

        if ($jumlah >= 4) {
            $hasil .= " " . strtoupper($parts[$jumlah - 1][0]);
        }

        return $hasil;
    }
}
