<?php

class EmployeeTaxData
{
    private $salary;

    private $isr;

    public function __construct(string $salary, int $isr)
    {
        $this->salary = $salary;
        $this->isr = $isr / 100;
    }

    public function getTaxData()
    {
        return $this->isr * $this->salary;
    }
}

class Employee
{
    private $id;

    private $name;

    private $email;

    private $taxData;

    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function setTaxData(string $salary, int $isr)
    {
        $this->taxData = new EmployeeTaxData($salary, $isr);
    }
}

class EmployeeBoss extends Employee
{
    private $desitions;

    public function __construct(int $id, string $name, string $email, array $desitions)
    {
        parent::__construct($id, $name, $email);

        $this->desitions = $desitions;
    }
}



