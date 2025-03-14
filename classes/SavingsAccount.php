<?php

namespace classes;

use classes\Account;

class SavingsAccount extends Account
{
    private $withdrawalLimit = 5000;

    public function withdraw($amount)
    {
        if ($amount > $this->withdrawalLimit) {
            echo "Withdrawal limit exceeded. You can only withdraw up to $this->withdrawalLimit" . PHP_EOL;
        } elseif ($amount > $this->balance) {
            echo "Insufficient funds." . PHP_EOL;
        } else {
            $this->balance -= $amount;
            echo "Withdrew $amount. New balance: $this->balance" . PHP_EOL;
        }
    }
}