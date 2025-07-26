<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'role_id' => 1,
                'img' => NULL,
                'email' => 'beatty.joseph@example.com',
                'email_verified_at' => '2025-07-26 08:15:08',
                'password' => '$2y$12$thoIWdW2R27/PLRHG6t9V.DwsrL/bla3Asd6f9VRwx7OiZ0qHNwJK',
                'remember_token' => 'F67o0MU5KpohR8vRLtC6QTGhNlSB7XT6LFXT6xCnqs6HUXaS8TdOVloJSKDf',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 08:15:08',
                'updated_at' => '2025-07-26 08:15:08',
            ),
        ));
        
        
    }
}