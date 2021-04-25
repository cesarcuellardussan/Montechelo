<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->insert([
            [
                'identificacion'=>'123456',
                'texto'=>'Hola mundo'
            ],
            [
                'identificacion'=>'654321',
                'texto'=>'Hello world'
            ]
        ]);
    }
}
