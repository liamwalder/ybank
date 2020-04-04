<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\Controller;

/**
 * Class AccountController
 * @package App\Http\Controllers\Api
 */
class AccountController extends Controller
{

    /**
     * @param Account $account
     * @return Account
     */
    public function show(Account $account)
    {
        return $account;
    }

}
