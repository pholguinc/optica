<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Empleado']);

        Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.roles.index'])->assignRole($role1);

        Permission::create(['name' => 'admin.patients.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.patients.queries'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.categories.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.providers.index'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.shopping.index'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.sales.index'])->syncRoles([$role1,$role2]);



    }
}
