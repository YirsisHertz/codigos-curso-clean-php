<?php

/**
 * ISP: Interface Segregation Principle
 */

interface Workable
{
    public function work();
}

interface Feedable
{
    public function eat();
}

interface Salaried
{
    public function salary();
}

interface Maintainable
{
    public function maintenance();
}

interface Employee extends Workable, Feedable, Salaried
{
}

interface Electronic extends Workable, Maintainable
{
}

class Human implements Employee
{
    public function work()
    {
    }

    public function eat()
    {
    }

    public function salary()
    {
    }
}

class Robot implements Electronic
{
    public function work()
    {
    }

    public function maintenance()
    {
    }
}
