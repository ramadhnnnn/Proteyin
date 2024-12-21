<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $studentRole = Role::create([
            'name' => 'student'
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);
        
        # super admin
        $userOwner = User::create([
            'name' => 'Ramadhannn',
            'occupation' => 'Edukator',
            'avatar' => 'image/default-avatar.png',
            'email' => 'super@owner.com',
            'password' => bcrypt(12345678)
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
