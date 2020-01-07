<?php

use Illuminate\Database\Seeder;
use App\User;
class createUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Salus Trust',
                'email' => 'salus@salus.com',
                'is_admin' => '1',
                'password' =>  bcrypt('123456'),
            ],
            [
                'name' => 'spns consult',
                'email' => 'spns@spns.com',
                'is_admin' => '2',
                'password' => bcrypt('123456'),

            ],
            [
                'name' => 'first customer',
                'email' => 'customer@customer.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ]

        ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
                
    }

}
