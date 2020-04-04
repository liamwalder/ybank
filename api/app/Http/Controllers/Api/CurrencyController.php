<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionStoreRequest;
use App\Transaction;
use Illuminate\Http\Request;

/**
 * Class CurrencyController
 * @package App\Http\Controllers\Api
 */
class CurrencyController extends Controller
{

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $currencies = Currency::all();

        return $currencies;
    }


}
