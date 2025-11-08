<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class GeneralHelper
{
    public static function greeting(): string
    {
        $hour = Carbon::now()->hour;

        return match(true) {
            $hour >= 5 && $hour < 10 => 'Selamat Pagi',
            $hour >= 10 && $hour < 15 => 'Selamat Siang',
            $hour >= 15 && $hour < 18 => 'Selamat Sore',
            default => 'Selamat Malam',
        };
    }
}
