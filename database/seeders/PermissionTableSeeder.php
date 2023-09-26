<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (Permission::all() as $permission) {
            $permission->delete();
        }

        $permissions = [
            'super-admin',
            'user-management',
            'role-management',
            'reports-management',
            'regiment-management',
            'unit-management',
            'workshop-type-management',
            'workshop-management',
            'job-type-management',
            'repair-type-management',
            'sleme-battalion-management',
            'nature-of-repair-management',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
