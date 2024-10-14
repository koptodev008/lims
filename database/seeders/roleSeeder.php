<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->setupSuperAdmin();
    }

    protected function setupSuperAdmin()
    {
        DB::table('roles')->delete();
        DB::table('users')->delete();

        $roleName = 'Super Admin';
        $role = Role::create([
            'name' => $roleName
        ]);
        
        $superAdminUser = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'admin@koptotech.com',
            'password' => bcrypt('Admin@123'),
            'phone' => '7057121459',
            'role' => $role->id // Store the role's id here
        ]);
        
    }
}
