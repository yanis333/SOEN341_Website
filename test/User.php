<?php
final class User
{
    private $user;

    private function __construct($user)
    {
        $this->ensureIsValidUser($user);

        $this->user = $user;
    }

    public static function fromString($user)
    {
        return new self($user);
    }

    public function __toString()
    {
        return $this->user;
    }

    private function ensureIsValidUser($user)
    {
        if (!filter_var($user, FILTER_VALIDATE_USER)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid user',
                    $user
                )
            );
        }
    }
}