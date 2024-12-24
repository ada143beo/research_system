<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {

        $roles = [
            'Faculty',
            'REC',
            'TEC',
            'UREC',
            'Research Director',
        ];


        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['role_name' => $role],
                ['role_name' => $role]
            );
        }
    }
}

