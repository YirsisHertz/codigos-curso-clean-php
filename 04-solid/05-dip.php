<?php

/**
 * DIP: Dependency Inversion Principle
 */

interface Employee
{
    public function work();
}

class Human implements Employee
{
    public function work()
    {
    }
}

class Robot implements Employee
{
    public function work()
    {
    }
}

class Manager
{
    private $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function manage()
    {
        $this->employee->work();
    }
}

