<?php

namespace App\Enums\Permission;

enum PermissionEnum
{
    const HAS_ALL_SYSTEM_ACCESS = 'has-all-system-access';

    const ROLE_SUPER_ADMIN = [
        'role' => RoleEnum::ROLE_SUPER_ADMIN,
        'permissions' => [
            PermissionEnum::HAS_ALL_SYSTEM_ACCESS
        ]
    ];

    const ROLE_USER = [
        'role' => RoleEnum::ROLE_USER,
        'permissions' => [
            PermissionEnum::HAS_ALL_SYSTEM_ACCESS
        ]
    ];

    const ALL_PERMISSIONS = [
        PermissionEnum::HAS_ALL_SYSTEM_ACCESS
    ];

    const ALL_PERMISSIONS_AS_LABEL = [
        PermissionEnum::HAS_ALL_SYSTEM_ACCESS => 'Has all system access'
    ];

    public static function GetPermissionNameByPermissionId(int $id): string
    {
        return match ($id) {
            PermissionEnum::HAS_ALL_SYSTEM_ACCESS => PermissionEnum::ALL_PERMISSIONS_AS_LABEL[PermissionEnum::HAS_ALL_SYSTEM_ACCESS],
            default => 'unknown'
        };
    }

    public static function GetPermissionIdByPermissionName(string $name): ?int
    {
        return match ($name) {
            PermissionEnum::ALL_PERMISSIONS_AS_LABEL[PermissionEnum::HAS_ALL_SYSTEM_ACCESS] => PermissionEnum::HAS_ALL_SYSTEM_ACCESS,
            default => null
        };
    }

    public static function GetPermissionIdByPermissionLabel(string $label): ?int
    {
        return match ($label) {
            'Has all system access' => PermissionEnum::HAS_ALL_SYSTEM_ACCESS,
            default => null
        };
    }

    public static function GetPermissionLabelByPermissionId(int $id): ?string
    {
        return match ($id) {
            PermissionEnum::HAS_ALL_SYSTEM_ACCESS => PermissionEnum::ALL_PERMISSIONS_AS_LABEL[PermissionEnum::HAS_ALL_SYSTEM_ACCESS],
            default => 'unknown'
        };
    }

    public static function GetPermissionLabelByPermissionName(string $name): ?string
    {
        return match ($name) {
            PermissionEnum::ALL_PERMISSIONS_AS_LABEL[PermissionEnum::HAS_ALL_SYSTEM_ACCESS] => 'Has all system access',
            default => null
        };
    }
}
