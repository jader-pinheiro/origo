<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Planos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $rows = [
            ['plano' => 'Free', 'mensalidae' => 0],
            ['plano' => 'Basic', 'mensalidae' => 100],
            ['plano' => 'Plus', 'mensalidae' => 187]
        ];

        foreach ($rows as $row) {
            $insert = DB::table('planos')->insert($row);
        }
    }
}
