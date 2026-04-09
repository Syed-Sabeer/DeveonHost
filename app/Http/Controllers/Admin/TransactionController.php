<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\View\View;

class TransactionController extends Controller
{
    public function index(): View
    {
        $transactions = Transaction::query()
            ->with(['user', 'hostingPlan', 'hosting'])
            ->latest()
            ->paginate(20);

        return view('admin.transactions.index', [
            'transactions' => $transactions,
        ]);
    }

    public function show(Transaction $transaction): View
    {
        $transaction->load(['user', 'hostingPlan', 'hosting']);

        return view('admin.transactions.show', [
            'transaction' => $transaction,
        ]);
    }
}
