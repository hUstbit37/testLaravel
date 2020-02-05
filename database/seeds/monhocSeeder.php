<?php

use Illuminate\Database\Seeder;

class monhocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Monhoc::class, 20)->create();
        //
    }
}
