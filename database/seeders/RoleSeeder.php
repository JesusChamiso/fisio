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
        $medico = Role::create(['name' => 'medico']);
        $secretaria = Role::create(['name' => 'secretaria']);
        $cajero = Role::create(['name' => 'cajero']);

        Permission::create(['name' => 'home'])->syncRoles([$medico, $secretaria, $cajero]);
        
        Permission::create(['name' => 'paciente.index'])->syncRoles([$medico, $secretaria, $cajero]);
        Permission::create(['name' => 'paciente.crear'])->syncRoles([$medico]);
        Permission::create(['name' => 'paciente.editar'])->syncRoles([$medico]);
        Permission::create(['name' => 'paciente.eliminar'])->syncRoles([$medico]);

        Permission::create(['name' => 'historial.crear'])->syncRoles([$medico]);
        Permission::create(['name' => 'historial.editar'])->syncRoles([$medico]);
        Permission::create(['name' => 'historial.eliminar'])->syncRoles([$medico]);
        
        Permission::create(['name' => 'recetas.index'])->syncRoles([$medico, $secretaria]);
        Permission::create(['name' => 'recetas.crear'])->syncRoles([$medico, $secretaria]);
        Permission::create(['name' => 'recetas.editar'])->syncRoles([$medico]);
        Permission::create(['name' => 'recetas.eliminar'])->syncRoles([$medico]);
        
        Permission::create(['name' => 'pago.index'])->syncRoles([$cajero]);
        Permission::create(['name' => 'agenda'])->syncRoles([$medico, $secretaria]);

    }
}
