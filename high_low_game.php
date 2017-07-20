<?php

// game picks a random number between 1 and 100.
// $computersNumber = mt_rand(1, 100);

// fwrite(STDOUT, "Please declare two numbers.\n");
// $minMaxParameters = trim(fgets(STDIN));
// var_dump($argc);
 	if ($argc == 3) {
 		$numberOfGuesses = 0;
 		$computersNumber = mt_rand($argv[1], $argv[2]);
 		 do {
 			fwrite(STDOUT, "Guess a number.");
			$usersNumber = trim(fgets(STDIN));
			if (is_numeric($usersNumber) === false) {
				fwrite(STDOUT, "PLEASE ENTER A VALID INTEGER\n");
			} else if ($usersNumber > $computersNumber) {
				fwrite(STDOUT, "LOWER\n");
				$numberOfGuesses += 1;
			} else if ($usersNumber == $computersNumber) {
				fwrite(STDOUT, "GOOD GUESS\n");
				$numberOfGuesses += 1;
				fwrite(STDOUT, "You guessed {$numberOfGuesses} times.\n");
			} else if ($usersNumber < $computersNumber) {
				fwrite(STDOUT, "HIGHER\n");
				$numberOfGuesses += 1;
			}
		} while ($usersNumber != $computersNumber);
 	}
// prompts user to guess the number

// if user's guess is less than the number, it outputs "HIGHER"

// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"