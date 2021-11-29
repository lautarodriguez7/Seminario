<?php

namespace Database\Seeders;

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
        $role2 = Role::create(['name' => 'Blogger']);
        $role3 = Role::create(['name' => 'Administrativo']); 

        // Permission::create(['name' => 'articulo.index'])->syncRoles([$role1, $role2]); PARA SINCRONIZAR LOS PERMISOS CON VARIOS ROLES 
        Permission::create(['name' => 'articulo.index',
                            'description' => 'Ver articulo'])->syncRoles([$role1, $role2]); // NOS SIRVE PARA DAR UN PERMISO CON UN SOLO ROLL
        Permission::create(['name' => 'articulo.create',
                            'description' => 'Crear articulo'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'articulo.edit',
                            'description' => 'Editar articulo'])->assignRole($role1);
        Permission::create(['name' => 'articulo.destroy',
                            'description' => 'Eliminar articulo '])->assignRole($role1);

        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver usuarios'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Editar rol usuario '])->assignRole($role1);
        Permission::create(['name' => 'admin.users.update',
                            'description' => 'Actualizar rol de usuario'])->assignRole($role1);
    }
}
