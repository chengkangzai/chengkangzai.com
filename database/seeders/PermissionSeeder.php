<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        $permissions = [
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'user_management_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'permission_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'permission_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'permission_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'permission_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'permission_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'role_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'role_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'role_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'role_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'role_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'user_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'user_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'user_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'user_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'user_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'profile_password_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'post_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'post_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'post_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'post_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'post_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'work_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'work_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'work_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'work_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'work_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'comment_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'comment_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'comment_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'comment_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'comment_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'tag_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'tag_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'tag_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'tag_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'tag_access',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'schedule_create',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'schedule_edit',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'schedule_show',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'schedule_delete',
            ],
            [
                'id' => ++$i,
                'guard_name' => 'web',
                'name' => 'schedule_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
