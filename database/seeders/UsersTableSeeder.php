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
                'role_id' => 2,
                'img' => NULL,
                'email' => 'beatty.joseph@example.com',
                'email_verified_at' => '2025-07-26 08:15:08',
                'password' => '$2y$12$thoIWdW2R27/PLRHG6t9V.DwsrL/bla3Asd6f9VRwx7OiZ0qHNwJK',
                'remember_token' => 'YSaFZYHruzASKUOgqkToI1wWVGeg0MMyOUaPwJgAHBvA3w7OQUcptlGTx1cl',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 08:15:08',
                'updated_at' => '2025-07-26 16:54:14',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'rifqi',
                'role_id' => 1,
                'img' => NULL,
                'email' => 'rifqi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$pNrlbgdoO8fwh4x//LvTU.z4IqcmBLLoeo6fRpSsfhPHmm8efewBC',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 16:45:59',
                'updated_at' => '2025-07-26 16:45:59',
            ),
        ));
        
        
    }
}