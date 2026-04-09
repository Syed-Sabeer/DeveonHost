<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class UserManagementController extends Controller
{
    public function index(): View
    {
        $users = User::query()
            ->whereDoesntHave('roles', function ($query) {
                $query->where('name', 'admin');
            })
            ->withCount('transactions')
            ->withSum('transactions', 'amount')
            ->latest()
            ->paginate(15);

        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    public function show(User $user): View
    {
        $user->load(['transactions' => function ($query) {
            $query->latest()->with(['hostingPlan', 'hosting']);
        }]);

        return view('admin.users.show', [
            'user' => $user,
        ]);
    }
}
