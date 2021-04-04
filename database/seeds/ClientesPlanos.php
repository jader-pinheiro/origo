<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesPlanos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            ['plano_id' => 1, 'cliente_id' => 1],
            ['plano_id' => 2, 'cliente_id' => 1],
            ['plano_id' => 3, 'cliente_id' => 1],

            ['plano_id' => 1, 'cliente_id' => 2],
            ['plano_id' => 2, 'cliente_id' => 2],
            ['plano_id' => 3, 'cliente_id' => 2],

            ['plano_id' => 1, 'cliente_id' => 3],
            ['plano_id' => 2, 'cliente_id' => 3],
            ['plano_id' => 3, 'cliente_id' => 3],

            // ['plano_id' => 1, 'cliente_id' => 4],
            ['plano_id' => 2, 'cliente_id' => 4],
            ['plano_id' => 3, 'cliente_id' => 4],

            // ['plano_id' => 1, 'cliente_id' => 5],
            //  ['plano_id' => 2, 'cliente_id' => 5],
            ['plano_id' => 3, 'cliente_id' => 5],

            // ['plano_id' => 1, 'cliente_id' => 6],
            ['plano_id' => 2, 'cliente_id' => 6],
            ['plano_id' => 3, 'cliente_id' => 6],

            // ['plano_id' => 1, 'cliente_id' => 7],
            ['plano_id' => 2, 'cliente_id' => 7],
            ['plano_id' => 3, 'cliente_id' => 7],

            ['plano_id' => 1, 'cliente_id' => 8],
            ['plano_id' => 2, 'cliente_id' => 8],
            ['plano_id' => 3, 'cliente_id' => 8],

            ['plano_id' => 1, 'cliente_id' => 9],
            ['plano_id' => 2, 'cliente_id' => 9],
            ['plano_id' => 3, 'cliente_id' => 9],

            ['plano_id' => 1, 'cliente_id' => 10],
            ['plano_id' => 2, 'cliente_id' => 10],
            ['plano_id' => 3, 'cliente_id' => 10],

            ['plano_id' => 1, 'cliente_id' => 11],
            ['plano_id' => 2, 'cliente_id' => 11],
            ['plano_id' => 3, 'cliente_id' => 11],


            ['plano_id' => 1, 'cliente_id' => 12],
            ['plano_id' => 2, 'cliente_id' => 12],
            ['plano_id' => 3, 'cliente_id' => 12],

            ['plano_id' => 1, 'cliente_id' => 13],
            ['plano_id' => 2, 'cliente_id' => 13],
            ['plano_id' => 3, 'cliente_id' => 13],

            ['plano_id' => 1, 'cliente_id' => 14],
            ['plano_id' => 2, 'cliente_id' => 14],
            ['plano_id' => 3, 'cliente_id' => 14],

            ['plano_id' => 1, 'cliente_id' => 15],
            ['plano_id' => 2, 'cliente_id' => 15],
            ['plano_id' => 3, 'cliente_id' => 15],

            ['plano_id' => 1, 'cliente_id' => 16],
            ['plano_id' => 2, 'cliente_id' => 16],
            ['plano_id' => 3, 'cliente_id' => 16],

            ['plano_id' => 1, 'cliente_id' => 17],
            ['plano_id' => 2, 'cliente_id' => 17],
            ['plano_id' => 3, 'cliente_id' => 17],

            ['plano_id' => 1, 'cliente_id' => 18],
            ['plano_id' => 2, 'cliente_id' => 18],
            ['plano_id' => 3, 'cliente_id' => 18]


        ];

        foreach ($rows as $row) {
            $insert = DB::table('clientes_planos')->insert($row);
        }
    }
}
