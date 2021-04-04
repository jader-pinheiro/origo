<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Clientes::class);
        $this->call(Planos::class);
        $this->call(ClientesPlanos::class);
    }
}
