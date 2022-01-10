<?php


namespace Ucc\Controllers;


use Ucc\Services\QuestionService;
use Ucc\Session;

class QuestionsController
{
    private QuestionService $questionService;

    public function __construct(QuestionService $questionService)
    {
                    parent::__construct();
        $this->questionService = $questionService;
    }

    public function beginGame(): bool
    {
        $name = $this->requestBody->name ?? null;
        if (empty($name)) {
            return $this->json('You must provide a name', 400);
        }

        Session::set('name', $name);
        Session::set('questionCount', 1);
        //TODO Get first question for user
        $question = null;

        return    $this->json(['question' => $question], 201);
    }

    public function answerQuestion(int $id): bool {
        if ( Session::get('name') === null ) {
            return $this->json('You must first begin a game', 400);
        }

        if ((int)Session::get('questionCount') > 4) {
            $name = Session::get('name');
            $points = Session::get('points');
            Session::destroy();
            return $this->json(['message' => "Thank you for playing {$name}. Your total score was: {$points} points!"]);
        }

        $answer = $this->requestBody->answer ?? null;
        if (empty($answer)) {
            return $this->json('You must provide an answer', 400);
        }

        //TODO: Check answer and increment user's points. Reply with a proper message
        $message = '';
        $question = null;

        return $this->json(['message' => $message, 'question' => $question]);
    }
}