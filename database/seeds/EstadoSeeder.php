<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'estado' => 'APR',
            'descripcion' => 'Aprobado. Estado inicial de la OT.',
        ]);

        DB::table('estados')->insert([
            'estado' => 'ENP',
            'descripcion' => 'En Proceso. La OT tiene un porcentaje de avance.',
        ]);

        DB::table('estados')->insert([
            'estado' => 'ENV',
            'descripcion' => 'En Validacion. La OT se encuentra a espera de validaciondel solicitante para poder ser concluida..',
        ]);

        DB::table('estados')->insert([
            'estado' => 'CON',
            'descripcion' => 'Concluido. La OT fue finalizada por parte del usuario soporte.',
        ]);

        DB::table('estados')->insert([
            'estado' => 'CER',
            'descripcion' => 'Cerrado. La OT fue cerrado por el solicitante, posterior a la conformidad con la conclusion.',
        ]);

        DB::table('estados')->insert([
            'estado' => 'ANU',
            'descripcion' => 'Anulado. La OT se encuentra anulada, por parte del usuario solicitante o el administrador del departamento.',
        ]);

        DB::table('estados')->insert([
            'estado' => 'REC',
            'descripcion' => 'Rechazada. La OT se encuentra rechazada, por parte del administrador del departamento.',
        ]);
    }
}
