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
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('qwertyuio'),

        ]);
        $user = User::where('email','admin@admin.com')->first();
        $user->roles()->attach($admin_role);


    }

}

