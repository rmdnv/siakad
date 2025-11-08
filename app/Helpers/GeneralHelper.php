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

    public static function validateInput(string $input, array $data): array
    {
        $input = strtolower(trim($input));
        $closest = null;

        $valid = collect($data)->first(fn($p) => strtolower($p) === $input);

        if ($valid) {
            return ['valid' => true, 'closest' => null];
        }

        foreach ($data as $prov) {
            if (stripos($prov, $input) !== false) {
                $closest = $prov;
                break;
            }
        }

        if (! $closest) {
            $percent = 0;
            foreach ($data as $prov) {
                similar_text($input, strtolower($prov), $sim);
                if ($sim > $percent) {
                    $percent = $sim;
                    $closest = $prov;
                }
            }
        }

        return ['valid' => false, 'closest' => $closest];
    }
}
