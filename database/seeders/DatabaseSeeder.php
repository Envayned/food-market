<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Hadi',
            'email' => 'hadi@admin.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
           'name' => 'Jonathan',
            'email' => 'jo@admin.com',
            'password' => Hash::make('password'),
        ]);
        User::factory(10)->create();
        $this->call([
           ProductSeeder::class,
        ]);
    }
}
