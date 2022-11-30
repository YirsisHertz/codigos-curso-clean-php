<?php

class RegisterUserSettings
{
    public $name;

    public $email;

    public $password;

    public $date;
}

function cipherPassword(string $plainPassword)
{
    return password_hash($plainPassword, PASSWORD_DEFAULT);
}

function decryptPassword(string $plainPassword, string $hash)
{
    return password_verify($plainPassword, $hash);
}

function createUser(RegisterUserSettings $userSettings)
{
    // Query para crear el usuario
}

function register(RegisterUserSettings $userSettings)
{
    if (empty($userSettings)) {
        return null;
    }

    $userSettings->password = cipherPassword($userSettings->password);

    createUser($userSettings);
}

