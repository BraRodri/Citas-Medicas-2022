<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'PayU',
            'image' => 'images/payments/PAYU.png'
        ]);

        PaymentPlatform::create([
            'name' => 'Efectivo',
            'image' => 'images/payments/EFECTIVO.png'
        ]);
    }
}
