<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Confirm;
use Illuminate\Database\Seeder;

class ConfirmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'name' => 'Krysia Hernandez',
            'email' => 'krysialee023@gmail.com',
            'phone_number' => '09192054322',
            'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
            'message' => 'Hi',
            'status' => 1,
        ];
        Appointment::create($data);
    }
}
