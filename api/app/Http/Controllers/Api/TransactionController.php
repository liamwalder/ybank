<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionStoreRequest;
use App\Transaction;
use Illuminate\Http\Request;

/**
 * Class TransactionController
 * @package App\Http\Controllers\Api
 */
class TransactionController extends Controller
{

    /**
     * @param Account $account
     * @return mixed
     */
    public function index(Account $account)
    {
        $transactions = Transaction::where('from', $account->id)->orWhere('to', $account->id)->get();

        return $transactions;
    }

    /**
     * @param Account $account
     * @param TransactionStoreRequest $request
     * @return mixed
     */
    public function store(Account $account, TransactionStoreRequest $request)
    {
        $toAccount = Account::find($request->input('to'));

        $amount = $request->input('amount');
        $details = $request->input('details');

        $account->update(['balance' => ($account->balance - $amount)]);

        $toAccount->update(['balance' => ($account->balance + $amount)]);

        $transaction = Transaction::create([
            'amount' => $amount,
            'details' => $details,
            'from' => $account->id,
            'to' => $toAccount->id,
        ]);

        return $transaction;
    }

}
