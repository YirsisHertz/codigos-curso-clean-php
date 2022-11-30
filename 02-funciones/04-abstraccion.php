<?php

class Tokens
{
    function tokenizer()
    {
        $tokens = [];
        foreach ($tokens as $token) {
            // verificamos
        }

        return $tokens;
    }
}

class Users
{
    function tokenizer(array $jwt)
    {
        $users = $jwt;
        foreach ($users as $user) {
            // asignamos tokens al usuario
        }

        return $user;
    }
}

class JWT
{
    private $tokens;

    private $users;

    public function __construct(Tokens $tokens, Users $users)
    {
        $this->tokens = $tokens;
        $this->users = $users;
    }

    function read(array $jwt)
    {
        $tokens = $this->tokens->tokenizer();
        $users = $this->users->tokenizer($jwt);

        $jwtToArrays = [];
        foreach ($jwtToArrays as $jwtToArray) {
            //convertimos jwt a array php
        }
    }
}

