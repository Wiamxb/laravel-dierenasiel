<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->role === 'admin') {
            $query->where('is_admin', true);
        }

        if ($request->role === 'user') {
            $query->where('is_admin', false);
        }

        $users = $query->orderBy('name')->get();

        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        // Admins en eigen account beschermen
        if ($user->is_admin || $user->id === auth()->id()) {
            abort(403);
        }

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Gebruiker succesvol verwijderd.');
    }
}
