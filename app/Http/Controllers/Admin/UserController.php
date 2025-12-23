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

        // ZOEKEN (naam of e-mail)
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        // FILTER (admin / user)
        if ($request->role === 'admin') {
            $query->where('is_admin', true);
        }

        if ($request->role === 'user') {
            $query->where('is_admin', false);
        }

        // SORTERING
        $users = $query->orderBy('name')->get();

        return view('admin.users.index', compact('users'));
    }
}
