<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name="Salman";
        $admin->email="salmanananda2@gmail.com";
        $admin->password=bcrypt("Rahasia");
        $admin->save();
    }
}
