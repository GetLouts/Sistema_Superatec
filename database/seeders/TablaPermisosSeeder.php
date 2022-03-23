<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//spatie
use Spatie\Permission\Models\Permission;

class TablaPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = collect([
            //tabla roles
            ['id' => 1, 'name' => 'ver-rol', 'guard_name' => 'web'],
            ['id' => 2, 'name' => 'crear-rol', 'guard_name' => 'web'],
            ['id' => 3, 'name' => 'editar-rol', 'guard_name' => 'web'],
            ['id' => 4, 'name' => 'borrar-rol', 'guard_name' => 'web'],
            //tabla usuarios
            ['id' => 5, 'name' => 'ver-usuario', 'guard_name' => 'web'],
            ['id' => 6, 'name' => 'crear-usuario', 'guard_name' => 'web'],
            ['id' => 7, 'name' => 'editar-usuario', 'guard_name' => 'web'],
            ['id' => 8, 'name' => 'borrar-usuario', 'guard_name' => 'web'],
            //tabla alumnos
            ['id' => 9, 'name' => 'ver-alumnos', 'guard_name' => 'web'],
            ['id' => 10, 'name' => 'crear-alumnos', 'guard_name' => 'web'],
            ['id' => 11, 'name' => 'editar-alumnos', 'guard_name' => 'web'],
            ['id' => 12, 'name' => 'borrar-alumnos', 'guard_name' => 'web'],
            //tabla alumnos inactivos
            ['id' => 13, 'name' => 'ver-alumnos-inactivos', 'guard_name' => 'web'],
            ['id' => 14, 'name' => 'editar-alumnos-inactivos', 'guard_name' => 'web'],
            //vistas menu 
            ['id' => 15, 'name' => 'ver-menu', 'guard_name' => 'web'],
            ['id' => 16, 'name' => 'ver-menu-roles', 'guard_name' => 'web'],
            ['id' => 17, 'name' => 'ver-menu-usuarios', 'guard_name' => 'web'],
            ['id' => 18, 'name' => 'ver-menu-alumnosa', 'guard_name' => 'web'],
            ['id' => 19, 'name' => 'ver-menu-periodos', 'guard_name' => 'web'],
            ['id' => 20, 'name' => 'ver-menu-graficas', 'guard_name' => 'web'],
            ['id' => 21, 'name' => 'ver-menu-cronogramas', 'guard_name' => 'web'],
            //tabla periodo
            ['id' => 22, 'name' => 'ver-periodo', 'guard_name' => 'web'],
            ['id' => 23, 'name' => 'crear-periodo', 'guard_name' => 'web'],
            ['id' => 24, 'name' => 'editar-periodo', 'guard_name' => 'web'],
            ['id' => 25, 'name' => 'borrar-periodo', 'guard_name' => 'web'],
            //tabla panel de control
            ['id' => 26, 'name' => 'ver-card', 'guard_name' => 'web'],

        ]);
        $permisos->each( function ($permiso) {
            DB::table('permissions')->insert([
                'id'=>$permiso['id'],
                'name'=>$permiso['name'],
                'guard_name'=>$permiso['guard_name'],
            ]);
        });
           
    }
}
