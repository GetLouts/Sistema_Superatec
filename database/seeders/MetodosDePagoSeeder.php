<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodosDePagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $metodos = [
        	(object) ['id' => 1, 'metodo_pago' => 'Bolivares', 'creado_por' => false, 'actualizado_por' => false],
            (object) ['id' => 2, 'metodo_pago' => 'Divisa', 'creado_por' => false, 'actualizado_por' => false],
            (object) ['id' => 3, 'metodo_pago' => 'Pago Movil', 'creado_por' => false, 'actualizado_por' => false],
            (object) ['id' => 4, 'metodo_pago' => 'Transferencia', 'creado_por' => false, 'actualizado_por' => false],
        ];

        foreach ($metodos as $value) {
        	DB::table('metodos')->insert([
        		'id' => $value->id,
	            'metodo_pago' => $value->metodo_pago,
                'creado_por' => $value->creado_por,
                'actualizado_por' => $value->actualizado_por,
	        ]);
        }
    }
}
