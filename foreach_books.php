<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $properties) {

	if ($properties['published'] > 1950) {
		echo "$title\n";
		echo "\tNumber of pages: " . $properties['pages'] . "\n";
		echo "\tYear of publication: " . $properties['published'] . "\n";
		echo "\tName of author: " . $properties['author'] . "\n";
		echo "--------------\n";
	}
	// echo "$title\nNumber of pages: " . $properties['pages'] . "\nYear of publication: " . $properties['published'] . "\nName of author: " . $properties['author'] . "\n--------------\n";
}

?>