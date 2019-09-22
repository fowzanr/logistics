<?php

use Illuminate\Database\Seeder;

class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\users::class, 10)->create();
    }
}
