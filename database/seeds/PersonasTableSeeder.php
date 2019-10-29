<?php

use Illuminate\Database\Seeder;
use App\Persona;
use Illuminate\Support\Facades\Schema;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Schema::disableForeignKeyConstraints();
        DB::table( 'personas' )->truncate();
        factory(Persona::class, 50)->create();
    }
}
