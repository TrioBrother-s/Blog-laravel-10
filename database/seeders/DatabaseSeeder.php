<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();

    if (!$adminRole) {
        $adminRole = Role::create(['name' => 'admin']);
    }

    User::create([
        'name' => 'kemper',
        'username' => 'kemper969',
        'email' => 'kemper@mail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('kemper123'),
        'remember_token' => Str::random(60),
    ])->assignRole($adminRole);

    User::create([
        'name' => 'Normal user',
        'username' => 'user123',
        'email' => 'user@example.com',
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'),
        'remember_token' => Str::random(60),
    ]);

    }
}

