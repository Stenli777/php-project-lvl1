<?php

namespace BrainGames\Games\GCD;

use function BrainGames\Engine\run;
use function cli\line;
use function cli\prompt;

const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_RANGE = 1;
const MAX_RANGE = 50;

function play()
{
    $round = function () {
        $a = rand(MIN_RANGE, MAX_RANGE);
        $b = rand(MIN_RANGE, MAX_RANGE);
        $answer = prompt("Question: {$a} {$b}");
        line("You answer: {$answer}");
        $correctAnswer = gcd($a, $b);

        return [$answer,$correctAnswer];
    };
    run(GAME_DESCRIPTION, $round);
}

function gcd($x, $y)
{
    return ($x % $y) ? gcd($y, $x % $y) : $y;
}
