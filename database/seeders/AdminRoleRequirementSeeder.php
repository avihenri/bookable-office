<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminRoleRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create super admin role
        $role = Role::create([
            'name' => 'Super Admin',
            'identifier' => 'SUPER_ADMIN'
        ]);

        // add all permissions role
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);

    }
}
