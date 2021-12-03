<?php

namespace App\Entity;

class User
{
    private int $id;
    private string $name;
    private string $password;
    private string $email;

    /**
     * @return string
     */

    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $name
     * @return User
     */

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }


    /**
     * @param string $password
     * @return User
     */
    
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    /**
     * @param string $email
     * @return User
     */
    
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }
}