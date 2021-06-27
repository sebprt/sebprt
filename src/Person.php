<?php

class Person
{
    private string $email;
    private array $languages;
    private array $tools;
    private array $hobbies;
    private array $socialNetworks;

    public function __construct(private string $firstname, private string $lastname, private string $location,
                                private int $age)
    {
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(array $languages): void
    {
        $this->languages = $languages;
    }

    public function getTools(): array
    {
        return $this->tools;
    }
    public function setTools(array $tools): void
    {
        $this->tools = $tools;
    }
    public function getHobbies(): array
    {
        return $this->hobbies;
    }

    public function setHobbies(array $hobbies): void
    {
        $this->hobbies = $hobbies;
    }

    public function getSocialNetworks(): array
    {
        return $this->socialNetworks;
    }

    public function setSocialNetworks(array $socialNetworks): void
    {
        $this->socialNetworks = $socialNetworks;
    }
}