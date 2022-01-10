# PHP Coding Challenge

## Description
For this challenge you are to complete the code of this repository so that you have a working REST-like questions game.

Most dependencies and libraries are wired in already but the code is incomplete so your task is to make sure that all the missing code is written and any bugs are fixed.

## Specifications

The app should work as follows:
1. The user sends a POST request to begin a game by sending his name.
2. The app creates a new game session for the user and sends him back the first question from a pool of questions with multiple choice answers, the question ID and the points that are given by the correct answer.
3. The user POSTs an answer.
4. The app responds with a message about the previous answer, the user's current score and the next question/possible answers.
5. Repeat 3-4 until 5 questions have been answered. In the last question, the app responds with the final score.

## Requirements
- PHP 7.4+ to run your code
- [Composer](https://getcomposer.org/) to assist your code
- An IDE like [PhpStorm](https://www.jetbrains.com/phpstorm/ ) or code editor like [Sublime Text](https://www.sublimetext.com/) to write your code
- A REST client like [Insomnia](https://insomnia.rest/) or [Postman](https://www.postman.com/) to test your code
- [Some good music](https://www.youtube.com/watch?v=StZcUAPRRac) to enhance your code

## Getting started
To get started, take the following steps:

1. Fork the repository
2. Checkout the code
3. Install your dependencies
4. Run your code with PHP's built-in server

After that you can use your REST client to call the endpoints and test your work.

## Rules
While you are free to edit the code as you desire, you will be judged not only upon your PHP proficiency but also on code structure and whether your [coding standards are consistent](https://blog.sideci.com/5-php-coding-standards-you-will-love-and-how-to-use-them-adf6a4855696). Using programming techniques properly to achieve your goal is important, but also writing your code as if the next developer knows where you live is highly recommended.

## Extra points
Even though TDD and writing tests cannot be enforced in such a small time period, any unit tests written will give extra points.

You also get extra points if you:
- Add a fun twist to the game
- Write documentation