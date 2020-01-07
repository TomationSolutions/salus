<?php

use Illuminate\Database\Seeder;
use App\Subscription;

class CreateSuscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscription = [
            [
              'name' => 'Basic',
              'price' => '2000',
            ],
            [
                'name' => 'Silver',
                'price' => '5000',
              ],
              [
                'name' => 'Gold',
                'price' => '30000',
              ],
             
            ];
            foreach ($subscription as $key => $value) {
                Subscription::create($value);
            }
    }
}
