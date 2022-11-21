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

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver lista de usuarios'])->assignRole($role1);
        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver listado de roles'])->assignRole($role1);

        Permission::create(['name' => 'admin.patients.index', 'description' => 'Ver lista de pacientes'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.patients.queries', 'description' => 'Ver consultas de pacientes'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver listado de categorías'])->assignRole($role1);
        Permission::create(['name' => 'admin.providers.index', 'description' => 'Ver listado de proveedores'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.shopping.index', 'description' => 'Realizar Compras'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.sales.index', 'description' => 'Realizar Ventas'])->syncRoles([$role1,$role2]);



    }
}
