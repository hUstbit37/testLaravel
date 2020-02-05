<?php

use Illuminate\Database\Seeder;

class sinhvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sinhvien::class, 20)->create();
        //
    }
}
