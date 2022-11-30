<?php

class BankAccount
{
    private $balance;

    public function __construct(int $amount = 1000)
    {
        $this->balance = $amount;
    }

    public function withdraw(int $amount)
    {
        if ($amount > $this->balance) {
            throw new Exception("Saldo insuficiente en la cuenta");
        }

        $this->balance -= $amount;
    }

    public function deposit(int $amount)
    {
        $this->balance += $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$bankAccount = new BankAccount(2000);

$bankAccount->deposit(100);

//echo $bankAccount->getBalance();

try {
    $bankAccount->withdraw(2500);
    echo $bankAccount->getBalance();
} catch (Exception $error) {
    echo $error->getMessage();
}

$bankAccount->deposit();

