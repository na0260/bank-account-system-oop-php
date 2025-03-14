<?php

namespace classes;

use classes\SavingsAccount;
use classes\CheckingAccount;

class Bank
{
    private static $accounts = [];

    public static function createAccount($type, $accountNumber, $owner, $initialBalance = 0)
    {
        if ($type == 'savings'){
            self::$accounts[$accountNumber] = new SavingsAccount($accountNumber, $owner, $initialBalance);
        } elseif ($type == 'checking'){
            self::$accounts[$accountNumber] = new CheckingAccount($accountNumber, $owner, $initialBalance);
        } else {
            echo "Unknown account type: $type" . PHP_EOL;
            return null;
        }

        echo "Account created for $owner with account number $accountNumber" . PHP_EOL;
        return self::$accounts[$accountNumber];
    }

    public static function getTotalAccounts()
    {
        return count(self::$accounts);
    }

}