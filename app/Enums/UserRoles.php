<?php

namespace App\Enums;

enum UserRolesEnum: string
{
    case ADMIN = 'admin';
    case USER = 'user';
    case CUSTOMER = 'customer';

    public static function values(): array
    {
        return array_column(self::cases(), "value");
    }
}

// export enum UserRolesEnum { ADMIN = 'admin, USER = 'user', CUSTOMER = 'customer' }
