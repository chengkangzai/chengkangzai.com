<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Hash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Password;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function index(): Factory|View|Application
    {
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create(): Factory|View|Application
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        User::create($request->all())->syncRoles($request->role);

        return redirect()->route('admin.users.index')->with('success', __('User created successfully.'));
    }

    public function show(User $user): Factory|View|Application
    {
        $user->load('roles');
        return view('admin.user.show', compact('user'));
    }

    public function edit(User $user): Factory|View|Application
    {
        $roles = Role::all();
        $user->load('roles');
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, User $user): string
    {
        $user->update($request->all());
        $user->syncRoles($request->get('role'));
        return redirect()->route('admin.users.index')->with('success', __('User updated successfully'));
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', __('User deleted successfully'));
    }

    public function editPassword(): View|Factory|Application
    {
        return view('admin.user.change-password');
    }

    public function changePassword(User $user, UpdateUserPasswordRequest $request): RedirectResponse
    {
        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->get('new_password'))
        ]);

        return redirect()->route('admin.home')->with('success', __('Password changed successfully'));
    }

    public function sendForgetPassword(User $user): RedirectResponse
    {
        Password::sendResetLink(['email' => $user->email]);
        return redirect()->route('admin.users.index')->with('success', __('Reset Email sent successfully'));
    }
}
