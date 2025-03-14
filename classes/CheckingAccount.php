<?php

namespace classes;

use classes\Account;

class CheckingAccount extends Account
{
    private $overdraftLimit = 1000;
    function withdraw($amount)
    {
        if ($amount > ($this->balance + $this->overdraftLimit)) {
            echo "Overdraft limit exceeded.".PHP_EOL;
        } else{
            $this->balance -= $amount;
            echo "Withdrew $amount. New balance: $this->balance".PHP_EOL;
        }
    }
}