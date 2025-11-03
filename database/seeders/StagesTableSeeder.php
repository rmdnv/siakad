<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stages')->delete();
        
        \DB::table('stages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tahap 1',
                'created_at' => '2025-09-01 12:33:24',
                'updated_at' => '2025-09-01 12:33:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tahap 2',
                'created_at' => '2025-09-01 13:17:37',
                'updated_at' => '2025-09-01 13:17:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tahap 3',
                'created_at' => '2025-09-01 13:18:37',
                'updated_at' => '2025-09-01 13:18:37',
            ),
        ));
        
        
    }
}