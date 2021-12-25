<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(): Factory|View|Application
    {
        $roles = Role::paginate(10);
        return view('admin.role.index', compact('roles'));
    }

    public function create(): Factory|View|Application
    {
        $permissions = Permission::pluck('name', 'id');
        return view('admin.role.create', compact('permissions'));
    }

    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $role = Role::create(['name' => $request->name]);
        $role->givePermissionTo($request->get('permissions'));
        return redirect()->route('admin.roles.index')->with('success', __('Role created successfully'));
    }

    public function show(Role $role)
    {
        $role->load('permissions');
        return view('admin.role.show', compact('role'));
    }

    public function edit(Role $role): Factory|View|Application
    {
        $permissions = Permission::all();
        $role->load('permissions');
        return view('admin.role.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->get('permissions'));
        return redirect()->route('admin.roles.index')->with('success', __('Role updated successfully'));
    }

    public function destroy(Role $role): RedirectResponse
    {
        if ($role->name == 'Super Admin') {
            return redirect()->route('admin.roles.index')->withErrors(__('Admin role can not be deleted'));
        }
        if ($role->users()->get()->isNotEmpty()) {
            return redirect()->route('admin.roles.index')->withErrors(__('Role has users assigned to it. Please remove users from this role and try again'));
        }
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', __('Role deleted successfully'));
    }
}
