<?php

// game picks a random number between 1 and 100.
$computersNumber = rand(1, 100);
// prompts user to guess the number

// if user's guess is less than the number, it outputs "HIGHER"
 do {
 	fwrite(STDOUT, "Guess a number.");
	$usersNumber = trim(fgets(STDIN));
	if (is_numeric($usersNumber) === false) {
		fwrite(STDOUT, "PLEASE ENTER A VALID INTEGER\n");
	} else if ($usersNumber > $computersNumber) {
		fwrite(STDOUT, "LOWER\n");
	} else if ($usersNumber == $computersNumber) {
		fwrite(STDOUT, "GOOD GUESS\n");
	} else if ($usersNumber < $computersNumber) {
		fwrite(STDOUT, "HIGHER\n");
	}
} while ($usersNumber != $computersNumber);
// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"