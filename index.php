<?php
require_once 'autoload.php';
use classes\Bank;

$acc1 = Bank::createAccount('savings', '1001', 'Nur', 5000);
$acc2 = Bank::createAccount('checking', '1002', 'Sam', 2000);

$acc1->deposit(1000);
$acc1->withdraw(3000);
$acc2->withdraw(3000);

echo "Total accounts: " . Bank::getTotalAccounts() . PHP_EOL;