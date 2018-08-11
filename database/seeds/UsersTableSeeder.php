<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'fullname' => 'Fabry Rukundo',
            'email' => 'fabry@me.com',
            'phonenumber' => '0735424789',
            'password' => bcrypt('sublime'),
            'admin' => 1
        ]);
    }
}
