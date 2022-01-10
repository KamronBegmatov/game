<?php


namespace Ucc\Services;


use JsonMapper;
use KHerGe\JSON\JSON;

class QuestionService
{
    const QUESTIONS_PATH = __DIR__ . '/../../questions.json';

    private JSON $json;
    private JsonMapper $jsonMapper;

    public function __construct(JSON $json, JsonMapper $jsonMapper)
    {
        $this->json = $json;
        $this->jsonMapper = $jsonMapper;
    }

    public function getRandomQuestions(int $count = 5): array
    {
        //TODO: Get {$count} random questions from JSON
    }

    public function getPointsForAnswer(int $id, string $answer): int
    {
        //TODO: Calculate points for the answer given
    }
}