<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
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
                'name' => 'Tadiwanashe',
                'paynumber' => '28',
                'first_name' => 'Tadiwanashe',
                'last_name' => 'Dauya',
                'Department' => 'I.T',
                'Position'=> 'Systems Application Administrator',
                'mobile' => '0783519199',
                'email' => 'tdauya@whelson.co.zw',
                'is_admin' => '1',
                'password' => bcrypt('makanakamwari'),

            ],
            [
                'paynumber' => 'APPS28',
                'first_name' => 'Tapiwa',
                'last_name' => 'Hungwe',
                'Department' => 'I.T',
                'Position'=> 'Intern',
                'mobile' => '0783519198',
                'name' => 'User',
                'email' => 'thungwe@whelson.co.zw',
                'is_admin' => '0',
                'password' => bcrypt('makanakamwari'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
