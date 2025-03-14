<?php

namespace classes;

use classes\Account;

class CheckingAccount extends Account
{
    private $overdraftLimit = 500;
    function withdraw($amount)
    {
        if ($amount > ($this->balance + $this->overdraftLimit)) {
            echo "Overdraft limit exceeded.".PHP_EOL;
            return;
        }

        $this->balance -= $amount;
        echo "Withdrew $amount. New balance: $this->balance".PHP_EOL;
    }
}