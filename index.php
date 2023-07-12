<?php

class User
{
    # skipcq: PHP-C1001
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
