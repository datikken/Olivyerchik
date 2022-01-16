<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::firstOrCreate([
            'name' => 'datikken',
            'email' => 'tikken23@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('23tikken')
        ]);

        $this->call([
            RecipeSeeder::class
        ]);
    }
}
