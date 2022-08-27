<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\run;
use function cli\line;
use function cli\prompt;

const GAME_DESCRIPTION = 'What is the result of the expression?';
const MIN = 1;
const MAX = 10;
const OPERATION = ['-' => 1,'+' => 2,'*' => 3];

function play()
{
    $round = function () {
        $a = rand(MIN, MAX);
        $b = rand(MIN, MAX);
        $operator = array_rand(OPERATION);
        $expression = "{$a} {$operator} {$b}";
        $answer = prompt("Question: $expression");
        line("You answer: {$answer}");
        $correctAnswer = eval("return $expression;");
        return [$answer, $correctAnswer];
    };
    run(GAME_DESCRIPTION, $round);
}
