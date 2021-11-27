<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);

        User::first()->assignRole($admin);

        $user = Role::create([
            'name' => 'User',
            'guard_name' => 'web',
        ]);

        User::where('id', '!=', 1)->get()->each->assignRole($user);

        $permissions = Permission::all();
        $admin->syncPermissions($permissions);

        $user->givePermissionTo('profile_password_edit');
        $user->givePermissionTo($permissions->filter(function (Permission $permission) {
            $prefix = explode('_', $permission->name)[0];
            return $prefix != 'role'
                && $prefix != 'permission'
                && $prefix != 'user'
                && $prefix != 'post'
                && $prefix != 'work'
                && $prefix != 'comment'
                && $prefix != 'tag'
                && $permission->name != 'user_management_access';
        }));
    }
}
