<?php

namespace Database\Seeders;

use App\Enums\Permission\PermissionEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            [
                'id' => 1,
                'name' => PermissionEnum::HAS_ALL_SYSTEM_ACCESS,
                'guard_name' => 'web'
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::query()->updateOrCreate(['id' => $permission['id']], $permission);
        }
    }
}
