<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run() : void
  {
    // User::factory(10)->create();

    // User::factory()->create([
    //   'username' => 'Test',
    //   'email' => 'test@example.com',
    // ]);
    $this->call(UsersTableSeeder::class);
      $this->call(MenusTableSeeder::class);
        $this->call(LogActvitiesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleAksesMenusTableSeeder::class);
    }
}
