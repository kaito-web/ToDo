<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(): void
    {
        User::create([
            'name' =>'test',
            'email' =>'test@example.com',
            'password'=>Hash::make('password'),
        ]);
    }
}
