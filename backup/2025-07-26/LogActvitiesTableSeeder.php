<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogActvitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('log_actvities')->delete();
        
        \DB::table('log_actvities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'login',
                'model_type' => NULL,
                'model_id' => NULL,
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 11:28:10',
                'updated_at' => '2025-07-26 11:28:10',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '1',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 11:28:43',
                'updated_at' => '2025-07-26 11:28:43',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '2',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 11:28:59',
                'updated_at' => '2025-07-26 11:28:59',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '3',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 11:29:47',
                'updated_at' => '2025-07-26 11:29:47',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '4',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 11:30:09',
                'updated_at' => '2025-07-26 11:30:09',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '5',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 11:30:31',
                'updated_at' => '2025-07-26 11:30:31',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '6',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:04:14',
                'updated_at' => '2025-07-26 12:04:14',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Hapus Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '1',
                'changes' => '{
"id": 1,
"title": "Dashboard",
"url": "\\/dashboard",
"icon": null,
"caret": 0,
"is_aktif": "on",
"parent_id": null,
"created_by": "admin",
"updated_by": "unknown",
"deleted_by": null,
"deleted_at": "2025-07-26T12:04:41.000000Z",
"created_at": "2025-07-26T11:28:43.000000Z",
"updated_at": "2025-07-26T12:04:41.000000Z"
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:04:41',
                'updated_at' => '2025-07-26 12:04:41',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '7',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:09:59',
                'updated_at' => '2025-07-26 12:09:59',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Hapus Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '7',
                'changes' => '{
"id": 7,
"title": "Dashboard",
"url": "\\/dashboard",
"icon": "<i class=\\"fa fa-laptop\\"><\\/i>",
"caret": 0,
"is_aktif": "on",
"parent_id": null,
"created_by": "admin",
"updated_by": "unknown",
"deleted_by": null,
"deleted_at": "2025-07-26T12:10:52.000000Z",
"created_at": "2025-07-26T12:09:58.000000Z",
"updated_at": "2025-07-26T12:10:52.000000Z"
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:10:52',
                'updated_at' => '2025-07-26 12:10:52',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '1',
                'changes' => '{
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T12:04:14.000000Z",
"to": "2025-07-26 12:11:05"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:11:05',
                'updated_at' => '2025-07-26 12:11:05',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '2',
                'changes' => '{
"icon": {
"from": null,
"to": "<i class=\\"fa-regular fa-sun\\"><\\/i>"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T11:28:59.000000Z",
"to": "2025-07-26 12:17:57"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:17:57',
                'updated_at' => '2025-07-26 12:17:57',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '3',
                'changes' => '{
"icon": {
"from": null,
"to": "<i class=\\"fa-regular fa-circle-user\\"><\\/i>"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T11:29:47.000000Z",
"to": "2025-07-26 12:20:15"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:20:15',
                'updated_at' => '2025-07-26 12:20:15',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '8',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:22:09',
                'updated_at' => '2025-07-26 12:22:09',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '9',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:22:38',
                'updated_at' => '2025-07-26 12:22:38',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'username' => 'guest',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '10',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:23:15',
                'updated_at' => '2025-07-26 12:23:15',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '11',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:26:54',
                'updated_at' => '2025-07-26 12:26:54',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '12',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:27:58',
                'updated_at' => '2025-07-26 12:27:58',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '5',
                'changes' => '{
"url": {
"from": "\\/settings\\/role",
"to": "\\/settings\\/roles"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T11:30:31.000000Z",
"to": "2025-07-26 12:35:27"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:35:27',
                'updated_at' => '2025-07-26 12:35:27',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Roles',
                'model_type' => 'Modules\\Settings\\Models\\Roles',
                'model_id' => '1',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:41:53',
                'updated_at' => '2025-07-26 12:41:53',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Roles',
                'model_type' => 'Modules\\Settings\\Models\\Roles',
                'model_id' => '2',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 12:42:20',
                'updated_at' => '2025-07-26 12:42:20',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'login',
                'model_type' => NULL,
                'model_id' => NULL,
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:10:47',
                'updated_at' => '2025-07-26 13:10:47',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Roles',
                'model_type' => 'Modules\\Settings\\Models\\Roles',
                'model_id' => '1',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:17:51',
                'updated_at' => '2025-07-26 13:17:51',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Roles',
                'model_type' => 'Modules\\Settings\\Models\\Roles',
                'model_id' => '2',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:18:08',
                'updated_at' => '2025-07-26 13:18:08',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Roles',
                'model_type' => 'Modules\\Settings\\Models\\Roles',
                'model_id' => '1',
                'changes' => '{
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T13:17:51.000000Z",
"to": "2025-07-26 13:28:50"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:28:50',
                'updated_at' => '2025-07-26 13:28:50',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Roles',
                'model_type' => 'Modules\\Settings\\Models\\Roles',
                'model_id' => '2',
                'changes' => '{
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T13:18:08.000000Z",
"to": "2025-07-26 13:29:18"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:29:18',
                'updated_at' => '2025-07-26 13:29:18',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Roles',
                'model_type' => 'Modules\\Settings\\Models\\Roles',
                'model_id' => '2',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:29:31',
                'updated_at' => '2025-07-26 13:29:31',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'logout',
                'model_type' => NULL,
                'model_id' => NULL,
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:32:20',
                'updated_at' => '2025-07-26 13:32:20',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'login',
                'model_type' => NULL,
                'model_id' => NULL,
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:37:30',
                'updated_at' => '2025-07-26 13:37:30',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '13',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:49:34',
                'updated_at' => '2025-07-26 13:49:34',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '13',
                'changes' => '{
"parent_id": {
"from": null,
"to": "11"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T13:49:34.000000Z",
"to": "2025-07-26 13:49:58"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:49:58',
                'updated_at' => '2025-07-26 13:49:58',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '14',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:53:54',
                'updated_at' => '2025-07-26 13:53:54',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '15',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 13:54:24',
                'updated_at' => '2025-07-26 13:54:24',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '16',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:01:29',
                'updated_at' => '2025-07-26 14:01:29',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '17',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:21:07',
                'updated_at' => '2025-07-26 14:21:07',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '18',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:21:26',
                'updated_at' => '2025-07-26 14:21:26',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '18',
                'changes' => '{
"url": {
"from": "\\/pendaf",
"to": "\\/pendaftaran"
},
"parent_id": {
"from": null,
"to": "4"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T14:21:26.000000Z",
"to": "2025-07-26 14:21:51"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:21:51',
                'updated_at' => '2025-07-26 14:21:51',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '18',
                'changes' => '{
"url": {
"from": "\\/pendaftaran",
"to": "\\/daftar\\/baru"
},
"parent_id": {
"from": 4,
"to": "18"
},
"updated_at": {
"from": "2025-07-26T14:21:51.000000Z",
"to": "2025-07-26 14:22:38"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:22:38',
                'updated_at' => '2025-07-26 14:22:38',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '19',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:24:00',
                'updated_at' => '2025-07-26 14:24:00',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '20',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:25:14',
                'updated_at' => '2025-07-26 14:25:14',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '21',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:26:58',
                'updated_at' => '2025-07-26 14:26:58',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '22',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:27:39',
                'updated_at' => '2025-07-26 14:27:39',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '23',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:28:27',
                'updated_at' => '2025-07-26 14:28:27',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '23',
                'changes' => '{
"icon": {
"from": null,
"to": "<i class=\\"fa-solid fa-percent\\"><\\/i>"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T14:28:27.000000Z",
"to": "2025-07-26 14:29:16"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:29:16',
                'updated_at' => '2025-07-26 14:29:16',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '24',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:30:12',
                'updated_at' => '2025-07-26 14:30:12',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '25',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:31:47',
                'updated_at' => '2025-07-26 14:31:47',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '26',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:32:42',
                'updated_at' => '2025-07-26 14:32:42',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '27',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:33:31',
                'updated_at' => '2025-07-26 14:33:31',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '28',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:34:11',
                'updated_at' => '2025-07-26 14:34:11',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '24',
                'changes' => '{
"url": {
"from": "\\/naik_kelas",
"to": "\\/naik"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T14:30:12.000000Z",
"to": "2025-07-26 14:40:50"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:40:50',
                'updated_at' => '2025-07-26 14:40:50',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '29',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:41:16',
                'updated_at' => '2025-07-26 14:41:16',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '24',
                'changes' => '{
"title": {
"from": "Kenaikan Kelas",
"to": "Naik Kelas"
},
"updated_at": {
"from": "2025-07-26T14:40:50.000000Z",
"to": "2025-07-26 14:41:42"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:41:42',
                'updated_at' => '2025-07-26 14:41:42',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Tambah Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '30',
                'changes' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:42:14',
                'updated_at' => '2025-07-26 14:42:14',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '26',
                'changes' => '{
"title": {
"from": "Pemasukan Umum",
"to": "Pemasukan"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T14:32:42.000000Z",
"to": "2025-07-26 14:43:24"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 14:43:24',
                'updated_at' => '2025-07-26 14:43:24',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update settings',
                'model_type' => 'Modules\\Settings\\Models\\settings',
                'model_id' => '1',
                'changes' => '{
"alamat": {
"from": null,
"to": "Bekasi"
},
"email": {
"from": null,
"to": "armaniyyah@gmail.com"
},
"phone": {
"from": null,
"to": "085161145097"
},
"base_url": {
"from": null,
"to": "http:\\/\\/127.0.0.1:8000\\/"
},
"logo": {
"from": null,
"to": "logo_20250726160307.png"
},
"background": {
"from": null,
"to": "background_20250726160307.jpg"
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": null,
"to": "2025-07-26 16:03:07"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 16:03:07',
                'updated_at' => '2025-07-26 16:03:07',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '9',
                'changes' => '{
"url": {
"from": "users\\/data",
"to": "\\/users\\/data"
},
"parent_id": {
"from": 3,
"to": null
},
"updated_by": {
"from": "unknown",
"to": "admin"
},
"updated_at": {
"from": "2025-07-26T12:22:38.000000Z",
"to": "2025-07-26 16:15:27"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 16:15:27',
                'updated_at' => '2025-07-26 16:15:27',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '9',
                'changes' => '{
"parent_id": {
"from": null,
"to": "8"
},
"updated_at": {
"from": "2025-07-26T16:15:27.000000Z",
"to": "2025-07-26 16:16:35"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 16:16:35',
                'updated_at' => '2025-07-26 16:16:35',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'username' => 'admin',
                'activity' => 'Update Menu',
                'model_type' => 'Modules\\Settings\\Models\\Menu',
                'model_id' => '9',
                'changes' => '{
"parent_id": {
"from": 8,
"to": "9"
},
"updated_at": {
"from": "2025-07-26T16:16:35.000000Z",
"to": "2025-07-26 16:17:07"
}
}',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'deleted_at' => NULL,
                'created_at' => '2025-07-26 16:17:07',
                'updated_at' => '2025-07-26 16:17:07',
            ),
        ));
        
        
    }
}