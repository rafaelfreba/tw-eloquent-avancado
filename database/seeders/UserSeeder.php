<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => Str::random(10),
        //     'email' => Str::random(15) . '@teste.com',
        //     'password' => bcrypt('1234')
        // ]);

        dd(User::factory()->count(1)->make());

    }
}
