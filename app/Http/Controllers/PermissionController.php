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
        //TODO : search functionality, maybe with spatie filter ?
        $permissions = Permission::simplePaginate(10);

        return view('admin.permission.index', compact('permissions'));
    }

    public function show(Permission $permission): Factory|View|Application
    {
        $permission->load('roles');

        return view('admin.permission.show', compact('permission'));
    }
}
