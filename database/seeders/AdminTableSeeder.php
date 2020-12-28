<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $init_comedians = [
            [
                'email' => 'admin@admin.com',
                'password' => 'admin',
            ],
        ];

        foreach($init_comedians as $init_comedian) {

            $comedian = new Admin();
            $comedian->email = $init_comedian['email'];
            $comedian->password = Hash::make($init_comedian['password']);
            $comedian->save();

        }

    }
}
