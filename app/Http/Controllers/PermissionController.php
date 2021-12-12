<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    public function index(): Factory|View|Application
    {
        $permissions = Permission::paginate();
        return view('admin.permission.index', compact('permissions'));
    }

    public function show(Permission $permission): Factory|View|Application
    {
        $permission->load('role', 'users');
        return view('admin.permission.show', compact('permission'));
    }
}
