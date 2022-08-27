<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function game()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $maxNum = 1;
    $minNum = 100;
    for ($i = 0; $i < 3; $i++) {
        $random = rand($minNum, $maxNum);
        $answer = prompt("Question: {$random}");
        line("Your answer: {$answer}");
        $correctAnswer = $random % 2 === 0 ? 'yes' : 'no';
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
