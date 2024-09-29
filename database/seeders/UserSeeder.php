<?php

namespace Database\Seeders;

use App\Enums\Permission\PermissionEnum;
use App\Enums\Permission\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $suUser = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => \Hash::make('P@$$w0rd'),
                'email_verified_at' => now()
            ]
        ];

        User::query()
            ->updateOrCreate([
                'id' => $suUser[0]['id']
            ], $suUser[0])
            ->assignRole(RoleEnum::ROLE_SUPER_ADMIN)
            ->givePermissionTo(PermissionEnum::HAS_ALL_SYSTEM_ACCESS);
    }
}
