<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.show', ['user' => $user, 'tweets' => $user->tweets]);
    }

    public function follow(User $user)
    {
        auth()
            ->user()
            ->toggleFollow($user);
        return back();
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);

        return view('profiles.edit', ["user" => $user]);
    }

    public function update(User $user)
    {
        $this->authorize('edit', $user);

        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'avatar' => ['file'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'min:8', 'confirmed'],
        ]);

        if (\request('avatar')) {
            $attributes['avatar'] = \request('avatar')->store('avatars');
        }
        $user->update($attributes);

        return redirect(route('view-profile', $user));


    }

    public function explore()
    {
        return view('explore', ['users' => User::paginate(10)]);
    }
}
