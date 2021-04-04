<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Clientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rows = [
            ['nome' => 'Claudianus Boast', 'email' => 'cboast0@fastcompany.com', 'telefone' => '(19) 957645371', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'data_nasc' => '07/06/1993'],
            ['nome' => 'Loni Jennions', 'email' => 'ljennions1@va.gov', 'telefone' => '(19) 905613161', 'estado' => 'São Paulo', 'cidade' => 'Limeira', 'data_nasc' => '09/05/1985'],
            ['nome' => 'Margi Gilhouley', 'email' => 'mgilhouley2@telegraph.co.uk', 'telefone' => '(19) 966290104', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'data_nasc' => '07/06/1993'],
            ['nome' => 'Lexy Sprulls', 'email' => 'lsprulls3@moonfruit.com', 'telefone' => '(19) 976121601', 'estado' => 'São Paulo', 'cidade' => 'Rio Claro', 'data_nasc' => '19/10/1999'],
            ['nome' => 'Marie Shatliff', 'email' => 'mshatliff4@cbslocal.com', 'telefone' => '(19) 991376354', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'data_nasc' => '20/07/1990'],
            ['nome' => 'Graig Mouncey', 'email' => 'gmouncey5@so-net.ne.jp', 'telefone' => '(19) 941806149', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'data_nasc' => '27/03/1990'],
            ['nome' => 'Laurice Liger', 'email' => 'lliger0@php.net', 'telefone' => '(35) 971740954', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nasc' => '07/06/1993'],
            ['nome' => 'Kendrick Sooper', 'email' => 'ksooper1@slate.com', 'telefone' => '(31) 944324086', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nasc' => '02/06/1981'],
            ['nome' => 'Gordon Levington', 'email' => 'glevington2@hpost.com', 'telefone' => '31) 922405868', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nasc' => '25/11/1993'],
            ['nome' => 'Noam Scolland', 'email' => 'nscolland3@mozilla.org', 'telefone' => '(35) 996817669', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nasc' => '31/12/1999'],
            ['nome' => 'Lindon Skehens', 'email' => 'lskehens4@npr.org', 'telefone' => '(35) 967671104', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nasc' => '10/01/1985'],
            ['nome' => 'Kimbra Rase', 'email' => 'krase5@topsy.com', 'telefone' => '(35) 999428030', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nasc' => '05/05/1999'],
            ['nome' => 'Lorenzo Fisk', 'email' => 'lfisk6@businessweek.com', 'telefone' => '(31) 912695467', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nasc' => '22/12/1985'],
            ['nome' => 'Bourke Flavelle', 'email' => 'bflavelle7@fc2.com', 'telefone' => '(35) 959386145', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'data_nasc' => '10/04/1984'],
            ['nome' => 'Curran McSharry', 'email' => 'cmcsharry8@webeden.co.uk', 'telefone' => '(35) 902916131', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'data_nasc' => '15/01/1983'],
            ['nome' => 'Aveline Dowtry', 'email' => 'adowtry9@miibeian.gov.cn', 'telefone' => '(31) 945227500', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nasc' => '23/12/1994'],
            ['nome' => 'John Sebastian', 'email' => 'jsebastiana@cbslocal.com', 'telefone' => '(31) 907366740', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nasc' => '06/04/1998'],
            ['nome' => 'Reynolds Greenan', 'email' => 'rgreenanb@bloomberg.com', 'telefone' => '(35) 923551410', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'data_nasc' => '19/07/1985'],

        ];

        foreach ($rows as $row) {
            $insert = DB::table('clientes')->insert($row);
        }
    }
}
