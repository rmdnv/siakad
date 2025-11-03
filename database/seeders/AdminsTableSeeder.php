<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $exists = DB::table('admins')->where('email', 'admin@admin.com')->exists();

        if (!$exists) {
            DB::table('admins')->insert([
                'nama'       => 'Admin',
                'email'      => 'admin@admin.com',
                'password'   => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $this->command->info('Admin sudah ada, seeder dilewati.');
        }
    }
}
