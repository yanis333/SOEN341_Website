<?php
final class Password
{
    private $password;

    private function __construct($password)
    {
        $this->ensureIsValidUser($password);

        $this->password = $password;
    }

    public static function fromString($password)
    {
        return new self($password);
    }

    public function __toString()
    {
        return $this->password;
    }

    private function ensureIsValidUser($password)
    {
        if (!filter_var($password, FILTER_VALIDATE_PASSWORD)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid password',
                    $password
                )
            );
        }
    }
}