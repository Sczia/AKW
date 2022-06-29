<?php

namespace Database\Seeders;

use App\Models\Manage;
use Illuminate\Database\Seeder;

class ManageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [

                'title' => 'Appointment Keeper World',
                'type' => 0,

            ],
            [

                'title' => 'Logo',
                'path' => '/img/logo-logo-removebg-preview.png',
                'type' => 1,


            ]

        ];

        foreach ($data as  $value) {
            Manage::create($value);
        }
    }
}
