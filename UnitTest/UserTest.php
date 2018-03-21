<?php
use PHPUnit\Framework\TestCase;
require 'User.php';
final class LoginTest extends TestCase
{
    public function testCanBeCreatedFromValidUser()
    {
        $this->assertInstanceOf(
            User::class,
            User::fromString('Michael')
        );
    }

    public function testCannotBeCreatedFromInvalidUser()
    {
        $this->expectException(InvalidArgumentException::class);

        User::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'Michael',
            User::fromString('Michael')
        );
    }





}