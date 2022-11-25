<?php

// merge string together with separator
use App\Enums\UserPermissionEnums;

if (!function_exists('str_merge')) {
    function str_merge(array $strings): string
    {
        return implode(' ', $strings);
    }
}

// remove array item if in condition
if (!function_exists('array_clean')) {
    function array_clean(array $data, array|string $removingArray): array
    {
        if (is_string($removingArray)) {
            $removingArray = [$removingArray];
        }
        foreach ($removingArray as $removeItem) {
            $data = array_filter($data, function ($item) use ($removeItem) {
                return !str_contains($item, $removeItem);
            });
        }
        return $data;
    }
}

// remove array item if in condition
if (!function_exists('array_take')) {
    function array_take(array $data, array|string $takingArray): array
    {
        if (is_string($takingArray)) {
            $removingArray = [$takingArray];
        }
        foreach ($takingArray as $takeItem) {
            $data = array_filter($data, function ($item) use ($takeItem) {
                return str_contains($item, $takeItem);
            });
        }
        return $data;
    }
}

if (!function_exists('superadmin_permission')) {
    function superadmin_permissions()
    {
        return UserPermissionEnums::asArray();
    }
}

if (!function_exists('admin_permissions')) {
    function admin_permissions()
    {
        return array_clean(UserPermissionEnums::asArray(), 'delete_');
    }
}


if (!function_exists('doctor_permissions')) {
    function doctor_permissions()
    {
        return array_clean(UserPermissionEnums::asArray(), 'delete_');
    }
}

if (!function_exists('user_permissions')) {
    function user_permissions()
    {
        return array_clean(UserPermissionEnums::asArray(), 'delete_');
    }
}
