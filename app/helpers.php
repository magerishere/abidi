<?php

// merge string together with separator
use App\Enums\UserPermissionEnums;
use App\Enums\UserRoleEnums;
use App\Models\User;

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


if (!function_exists('getMemberUsers')) {
    function getMemberUsers()
    {
        return User::role(UserRoleEnums::MEMBER)->get();
    }
}

if (!function_exists('getDoctorUsers')) {
    function getDoctorUsers()
    {
        return User::role(UserRoleEnums::DOCTOR)->get();
    }
}

// SMS Helper

if (!function_exists('kavenegarSMSOTP')) {

    function kavenegarSMSOTP($mobile,$token){

        $apiKey = '34766A373652457777676B464E2F344E6B653172564559504C7A356F643744654E454B4558564B554B68633D';
            $url = "https://api.kavenegar.com/v1/$apiKey/verify/lookup.json";
            
            $curl = curl_init();
            
            $fields = array(
                'receptor' => $mobile,
                'token' => $token,
                'template' => 'abidi'
            );
            
            $json_string = json_encode($fields);
            
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, TRUE);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
            
            $data = curl_exec($curl);
            $result = json_decode($data);
            return $result->return;
    
    }
}