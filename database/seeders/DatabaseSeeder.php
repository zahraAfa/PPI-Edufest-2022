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
            'name' => 'baron gobi',
            'username' => 'barongobber',
            'email' => 'barongobirn@gmail.com',
            'password' => bcrypt('lkw454da78'),
            'api_token' => Str::random(60)
        ]);
    }
}
