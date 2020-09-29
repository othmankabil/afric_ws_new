<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $admin_role =  \App\Role::where('name','Admin')->first();
        DB::table('users')->insert([
            'name' => 'Jarbane',
            'email' => 'm.jabrane@afric-domotique.ma',
            'password' => bcrypt('adminadmin'),

        ]);
        $user = User::where('email','m.jabrane@afric-domotique.ma')->first();
        $user->roles()->attach($admin_role);
    }

}

