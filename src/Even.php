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
    line('');
    $question1 = prompt('Question: 15');
    if ($question1 == 'no') {
    $result1 = 'Correct!';} else {
    return line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!", $name);
    }
    $question2 = prompt('Question: 6');
    if ($question2 == 'yes') {
    $result2 = 'Correct!';} else {
    return line("'no' is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, %s!", $name);
    }
    $question3 = prompt('Question: 7');
    if ($question3 == 'no') {
    $result3 = 'Correct!';} else {
    return line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!", $name);
    }
    return line("Congratulations, %s!", $name);
}
