<?php

namespace App\Enums\Permission;

enum RoleEnum
{
    const ROLE_SUPER_ADMIN = 1;
    const ROLE_USER = 2;

    const ROLE_SUPER_ADMIN_LABEL = 'Super Admin';
    const ROLE_USER_LABEL = 'User';

    const ALL_ROLES = [
        self::ROLE_SUPER_ADMIN,
        self::ROLE_USER
    ];

    const ALL_ROLES_LABELS = [
        self::ROLE_SUPER_ADMIN_LABEL,
        self::ROLE_USER_LABEL
    ];

    const ALL_ROLES_AS_LABEL = [
        self::ROLE_SUPER_ADMIN => RoleEnum::ROLE_SUPER_ADMIN_LABEL,
        self::ROLE_USER => RoleEnum::ROLE_USER_LABEL,
    ];

    const GENERAL_SIGNUP_ROLES = [
        self::ROLE_USER
    ];

    public static function GetValueByLabel(string $label): ?int
    {
        return match ($label) {
            self::ROLE_SUPER_ADMIN_LABEL => self::ROLE_SUPER_ADMIN,
            self::ROLE_USER_LABEL => self::ROLE_USER,
            default => null,
        };
    }

    public static function GetRoleNameByRoleId(int $id): string
    {
        return match ($id) {
            RoleEnum::ROLE_SUPER_ADMIN => RoleEnum::ROLE_SUPER_ADMIN_LABEL,
            RoleEnum::ROLE_USER => RoleEnum::ROLE_USER_LABEL,
            default => null
        };
    }

    public static function GetLabelByValue(int $id): ?int
    {
        return match ($id) {
            self::ROLE_SUPER_ADMIN => self::ROLE_SUPER_ADMIN_LABEL,
            self::ROLE_USER => self::ROLE_USER_LABEL,
            default => 'unknown',
        };
    }
}
