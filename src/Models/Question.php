<?php

namespace Ucc\Models;

use JsonSerializable;

class Question implements JsonSerializable
{
    public int $id;
    private string $question;
    private array $possibleAnswers;
    private string $correctAnswer;
    private int $points;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    public function getPossibleAnswers(): array
    {
        return $this->possibleAnswers;
    }

    public function setPossibleAnswers(array $possibleAnswers): void
    {
        $this->possibleAnswers = $possibleAnswers;
    }

    public function getCorrectAnswer(): string
    {
        return $this->correctAnswer;
    }

    public function setCorrectAnswer(string $correctAnswer): void
    {
        $this->correctAnswer = $correctAnswer;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'question' => $this->question,
            'possibleAnswers' => $this->possibleAnswers,
            'points' => $this->points,
        ];
    }
}