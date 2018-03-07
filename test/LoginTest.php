<?php
use PHPUnit\Framework\TestCase;
require 'Email.php';
require 'User.php';
require 'Password.php';
final class LoginTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }

    public function testCanBeCreatedFromValidUser()
    {
        $this->assertInstanceOf(
            User::class,
            User::fromString('user')
        );
    }

    public function testCanBeCreatedFromValidPassword()
    {
        $this->assertInstanceOf(
            Password::class,
            Password::fromString('password')
        );
    }



}