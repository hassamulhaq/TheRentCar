<?php

namespace Database\Seeders;

//use App\Enums\Permission\PermissionEnum;
use App\Enums\Permission\RoleEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['id' => RoleEnum::ROLE_SUPER_ADMIN, 'name' => RoleEnum::ROLE_SUPER_ADMIN_LABEL, 'guard_name' => 'web'],
            ['id' => RoleEnum::ROLE_USER, 'name' => RoleEnum::ROLE_USER_LABEL, 'guard_name' => 'web'],
        ];

        /*$rolePermission = [
            [
                'id' => RoleEnum::ROLE_SUPER_ADMIN,
                'permissions' => [
                    PermissionEnum::HAS_ALL_SYSTEM_ACCESS
                ]
            ],
            [
                'id' => RoleEnum::ROLE_BUSINESS_OWNER,
                'permissions' => [
                    PermissionEnum::HAS_ALL_SYSTEM_ACCESS
                ]
            ],
            [
                'id' => RoleEnum::ROLE_INDIVIDUAL,
                'permissions' => [
                    PermissionEnum::HAS_ALL_SYSTEM_ACCESS
                ]
            ]
        ];*/

        foreach ($roles as $role) {
            Log::info("role:" . json_encode($role));
            $newRole = Role::query()->updateOrCreate(['id' => $role['id']], $role);
            if (isset($rolePermission['id'][$newRole->id])) {
                $newRole->givePermissionTo($rolePermission[$newRole->id]);
            }
        }
    }
}
