<?php

namespace Ucc\Services;

use JsonMapper;
use KHerGe\JSON\JSON;
use Ucc\Models\Question;

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

    public function getRandomQuestion(): Question
    {
        $json_questions = json_decode(file_get_contents(self::QUESTIONS_PATH));
        $random_key = array_rand($json_questions);
        return $this->jsonMapper->map($json_questions[$random_key], new Question());
    }

    public function getRandomQuestions(int $count = 5): array
    {
        //TODO: Get {$count} random questions from JSON
        $json_questions = json_decode(file_get_contents(self::QUESTIONS_PATH));
        $all_questions = [];
        $random_keys = array_rand($json_questions, $count);

        foreach ($random_keys as $key){
            $all_questions[] = $this->jsonMapper->map($json_questions[$key], new Question());
        }

        return $all_questions;
    }

    public function getPointsForAnswer(int $id, string $answer): int
    {
        //TODO: Calculate points for the answer given
    }
}







