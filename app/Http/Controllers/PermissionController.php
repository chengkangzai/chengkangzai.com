<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions = Permission::paginate();
        return view('admin.permission.index', compact('permissions'));
    }

    public function show(Permission $permission)
    {
        $permission->load('role', 'users');
        return view('admin.permission.show', compact('permission'));
    }
}
