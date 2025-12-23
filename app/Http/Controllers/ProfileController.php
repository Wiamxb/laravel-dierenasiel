<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        return view('profile.edit', [
            'user' => auth()->user()
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'username'       => 'required|string|max:255',
            'birthday'       => 'nullable|date',
            'about_me'       => 'nullable|string|max:2000',
            'profile_photo'  => 'nullable|image|max:2048',
        ]);

        // Gewone velden
        $user->username = $validated['username'];
        $user->birthday = $validated['birthday'] ?? $user->birthday;
        $user->about_me = $validated['about_me'] ?? $user->about_me;

        // Profielfoto opslaan
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')
                ->store('profile_photos', 'public');

            $user->profile_photo = $path;
        }

        $user->save();

        return redirect()
            ->route('profile.show', $user->id)
            ->with('success', 'Profiel succesvol bijgewerkt.');
    }
}
