<?php

use Illuminate\Database\Seeder;

/**
 * Class CurrenciesTableSeeder
 */
class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => 'usd'
        ]);

    }
}
