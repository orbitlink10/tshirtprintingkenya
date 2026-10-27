<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $roles = collect([
            ['name' => 'admin', 'label' => 'Admin'],
            ['name' => 'customer', 'label' => 'Customer'],
            ['name' => 'provider', 'label' => 'Service Provider'],
            ['name' => 'dispatcher', 'label' => 'Staff/Dispatcher'],
        ])->mapWithKeys(fn ($role) => [$role['name'] => Role::updateOrCreate(['name' => $role['name']], $role)]);

        User::updateOrCreate(['email' => 'admin@tshirtprintingkenya.co.ke'], [
            'role_id' => $roles['admin']->id,
            'name' => 'T-Shirt Printing Admin',
            'phone' => null,
            'county' => 'Nairobi',
            'location' => 'Nairobi',
            'password' => Hash::make('password'),
        ]);

        User::updateOrCreate(['email' => 'dispatcher@tshirtprintingkenya.co.ke'], [
            'role_id' => $roles['dispatcher']->id,
            'name' => 'Operations Dispatcher',
            'phone' => null,
            'county' => 'Nairobi',
            'location' => 'Nairobi',
            'password' => Hash::make('password'),
        ]);

        Setting::putValue('service_areas', 'Nairobi, Kenya');

        $this->call(HomepageContentSeeder::class);
    }
}
