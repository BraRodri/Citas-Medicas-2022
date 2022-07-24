<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencys = [
            'COP'
        ];

        foreach ($currencys as $key => $value) {
            Currency::create([
                'iso' => $value
            ]);
        }
    }
}
