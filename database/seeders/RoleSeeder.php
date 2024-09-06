<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create_client']);
        Permission::create(['name' => 'update_client']);
        Permission::create(['name' => 'delete_client']);
        Permission::create(['name' => 'show_client']);
        Permission::create(['name' => 'export_client']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(['create_client', 'update_client', 'delete_client', 'show_client', 'export_client']);

        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo(['show_client', 'update_client']);

        $role2 = Role::create(['name' => 'user']);
        $role2->givePermissionTo('export_client');
    }
}
