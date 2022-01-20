<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserPasswordRequest;
use App\Models\User;
use Hash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{
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
}
