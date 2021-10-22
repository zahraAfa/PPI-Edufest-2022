<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        DB::table('admins')->insert([
            'name' => 'admin name',
            'username' => 'admin',
            'email' => 'rons@gmail.com',
            'password' => bcrypt('helloworld'),
            'api_token' => Str::random(60)
        ]);
    }
}
