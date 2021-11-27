<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class UserController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @return Application|Factory|View
     */
    public function edit()
    {
        return view('admin.user.edit');
    }


    /**
     * @param User $user
     * @param Request $request
     * @return RedirectResponse
     */
    public function changePassword(User $user, Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'old_password' => ['required', 'password:web'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->get('new_password'))
        ]);

        return redirect()->route('admin.home');
    }
}
