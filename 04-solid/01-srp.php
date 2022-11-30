<?php

/**
 * SRP: Single Responsibility Principle
 */

class User
{
    private $id;

    private $name;

    private $email;

    private $profileImage;

    private $password;

    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->$name = $name;
        $this->email = $email;
    }
}

class UserAuth
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function loginAccount(string $email, string $password)
    {

    }

    public function logoutAccount(User $user)
    {

    }

    public function changePassword(string $oldPassword, string $newPassword)
    {

    }

    public function verifyCredentials()
    {

    }
}

class UserSettings
{
    private $user;

    private $auth;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->auth = new UserAuth($user);
    }

    public function changeSettings(array $settings)
    {
        if ($this->auth->verifyCredentials()) {
            // todo el codigo
        }
    }
}

