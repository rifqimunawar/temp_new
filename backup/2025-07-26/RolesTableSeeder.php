<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
            'role_name' => 'System Adminstrator ( IT )',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:17:51',
                'updated_at' => '2025-07-26 13:28:50',
            ),
            1 => 
            array (
                'id' => 2,
                'role_name' => 'Staff Keuangan',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:18:08',
                'updated_at' => '2025-07-26 13:29:18',
            ),
        ));
        
        
    }
}