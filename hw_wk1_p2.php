<?php

// ..Create an array that represents a quiz.
//  In the top level array, the keys should be the question numbers and the values should be an associative array.
//   The associative array should have the following keys: 'question', 'answers', 'correct_answer'.
//   The 'question' is a string. 
//   The 'answers' is as associative array with alphabetical keys and string values. 
//   The 'correct_answer' is a string representing the letter of the correct answer. 
//   Make sure your quiz has at least 3 questions.

// 1. Question goes here.
  //  a. Answer one.
  //  b. Answer two.
  // *c. Answer three. (Star before answer denotes that it is correct)
  //  d. Answer four.


$quiz = [
[
	'question' => 'Question 1',
	'answer_1' => 'answer 1',
	'answer_2' => 'answer 2',
	'answer_3' => 'answer 3',
	'correct_answer' => 'correct answer'
],
[
	'question' => 'Question 2',
	'answer_1' => 'answer 1',
	'answer_2' => 'answer 2',
	'answer_3' => 'answer 3',
	'correct_answer' => 'correct answer'
],
[
	'question' => 'Question 3',
	'answer_1' => 'answer 1',
	'answer_2' => 'answer 2',
	'answer_3' => 'answer 3',
	'correct_answer' => 'correct answer'
	]
]; //ending outer array

$counter= 1;

	foreach($quiz as $question) {
		echo "$counter. $question[question]" . PHP_EOL;
		echo "\t a. $question[answer_1]" . PHP_EOL;
		echo "\t b. $question[answer_2]" . PHP_EOL;
		echo "\t c. $question[answer_3]" . PHP_EOL;
		echo "\t*d. $question[correct_answer]" . PHP_EOL;
		$counter++;
	}
// tips to make beter in the future:
// use an "if else" statement to make the correct answer more dyanmic

?>