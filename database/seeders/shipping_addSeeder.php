<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class shipping_addSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_adds')->insert([
            'shipping_add_street' => '2340 W 68th St',
            'shipping_add_city' => 'Hialeah',
            'shipping_add_state' => 'FL',
            'shipping_add_postalcode' => '33016',
            'shipping_add_country' => 'USA',
        ]);
    }
}
