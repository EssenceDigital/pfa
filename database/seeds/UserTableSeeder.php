<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Essence Digital',
            'email' => 'info@essence-digital.ca',
            'password' => bcrypt(env('ADMIN_CREDENTIALS', false))
        ]);
    }
}
