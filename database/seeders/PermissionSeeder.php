<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view-user',
            'view-all-user',
            'create-user',
            'update-user',
            'delete-user',
        ];

        foreach ($permissions as $permission) {
            config('permission.models.permission')::updateOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
    }
}
