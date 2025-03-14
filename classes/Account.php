<?php

namespace classes;

abstract class Account implements Transaction
{
    use Logger;
    protected $accountNumber;
    protected $balance;
    protected $owner;

    public function __construct($accountNumber, $owner, $initialBalance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->owner = $owner;
        $this->balance = $initialBalance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited $amount. New balance: $this->balance" . PHP_EOL;
        $this->log("Deposited $amount. New balance: $this->balance");
    }

    abstract function withdraw($amount);
}