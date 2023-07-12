<?php

class User
{
    // invalid: class methods can't be defined in PascalCase
    public function GetUsers(): array
    {
        // method implementation here
    }

    // invalid: Duplicate type `string` is redundant
    public function getUser(): string|int|object|string
    {
        // method implementation here
    }
}
