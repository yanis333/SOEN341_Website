<?php
use PHPUnit\Framework\TestCase;
require 'Question.php';
final class LoginTest extends TestCase
{
    public function testCanBeCreatedFromValidQuestion()
    {
        $this->assertInstanceOf(
            Question::class,
            Question::fromString('what is java')
        );
    }

    public function testCannotBeCreatedFromInvalidQuestion()
    {
        $this->expectException(InvalidArgumentException::class);

        Question::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'what is java',
            Question::fromString('what is java')
        );
    }





}