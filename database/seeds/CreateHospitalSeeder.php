<?php

use Illuminate\Database\Seeder;
use App\Hospital;

class CreateHospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital = [
            [
                'name' => 'Salus Trust',
                'email' => 'salus@salus.com',
                'phone' => '090898978',
                'address' =>  'Allen Avenue',
            ],
            [
                'name' => 'Adola Hospital',
                'email' => 'Adola@saAdolalus.com',
                'phone' => '090898978',
                'address' =>  'Adola Avenue',

            ],
            [
                'name' => 'Abcd Hos',
                'email' => 'Abcd@Abcd.com',
                'phone' => '090898978',
                'address' =>  'Abcd Avenue',
            ]

        ];
       
            foreach ($hospital as $key => $value) {
                Hospital::create($value);
            }
    }
}
