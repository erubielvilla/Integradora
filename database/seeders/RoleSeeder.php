<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'admin.home'])->assignRole($role1);

        Permission::create(['name' => 'admin.libro.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.libro.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.libro.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.libro.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.usuario.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.usuario.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.usuario.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.usuario.destroy'])->assignRole($role1);
        
    }
}
