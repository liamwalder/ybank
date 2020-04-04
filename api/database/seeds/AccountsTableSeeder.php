<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $euroCurrency = factory(\App\Currency::class)->create();
        $usdCurrency = factory(\App\Currency::class)->create([
            'name' => 'usd',
            'symbol' => '$'
        ]);

        DB::table('accounts')->insert([
            'name' => 'John',
            'balance' => 15000,
            'currency_id' => $euroCurrency->id
        ]);

        DB::table('accounts')->insert([
            'name' => 'Peter',
            'balance' => 100000,
            'currency_id' => $usdCurrency->id
        ]);
    }
}
