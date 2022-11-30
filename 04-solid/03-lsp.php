<?php

/**
 * LSP: Liskov Substitution Principle
 */

interface Bird
{
    public function eat();

    public function tweet();
}

interface Swimming
{
    public function swim();
}

interface Flying
{
    public function fly();
}

class Sparrow implements Bird, Flying
{
    public function eat()
    {
    }

    public function tweet()
    {
    }

    public function fly()
    {
    }
}

class Penguin implements Bird, Swimming
{
    public function eat()
    {
    }

    public function tweet()
    {
    }

    public function swim()
    {
    }
}

class Duck implements Bird, Swimming, Flying
{
    public function eat()
    {
    }

    public function tweet()
    {
    }

    public function swim()
    {
    }

    public function fly()
    {
    }
}

class RunApp
{
    public function __construct(Bird $bird)
    {

    }
}


