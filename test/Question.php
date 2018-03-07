<?php
final class Question
{
    private $question;

    private function __construct($question)
    {
        $this->ensureIsValidUser($question);

        $this->question = $question;
    }

    public static function fromString($question)
    {
        return new self($question);
    }

    public function __toString()
    {
        return $this->question;
    }

    private function ensureIsValidUser($question)
    {
        if (!filter_var($question, FILTER_VALIDATE_QUESTION)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid question',
                    $question
                )
            );
        }
    }
}