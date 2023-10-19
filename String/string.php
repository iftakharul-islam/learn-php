<?php

// Define the arrays for search and replace
$search = array("apple", "banana", "cherry");
$replace = array("orange", "grape", "Cream");

// Input string
$inputString = "I like apple, banana, and cherry.";

// Perform the replacements
$outputString = str_replace($search, $replace, $inputString);

// Output the result
echo $outputString.PHP_EOL;

?>
<?php

// Define a translation table
$translation = array("apple" => "orange", "banana" => "grape", "cherry" => "strawberry");

// Input string
$inputString = "I like apple, banana, and cherry.";

// Perform the replacements
$outputString = strtr($inputString, $translation);

// Output the result
echo $outputString.PHP_EOL;

?>
<?php

// Input string
$inputString = "I like apple, banana, and cherry.";

// Perform replacements using regular expressions
$outputString = preg_replace(array('/apple/', '/banana/', '/cherry/'), array('orange', 'grape', 'strawberry'), $inputString);

// Output the result
echo $outputString.PHP_EOL;

?>
<?php

// Define an associative array for search and replace
$replaceMap = array(
    "apple" => "orange",
    "banana" => "grape",
    "cherry" => "strawberry"
);

// Input string
$inputString = "I like apple, banana, and cherry.";

// Perform the replacements using a loop
foreach ($replaceMap as $search => $replace) {
    $inputString = str_replace($search, $replace, $inputString);
}

// Output the result
echo $inputString.PHP_EOL;

?>
<?php

// Input string
$inputString = "I like apples and bananas.";

// Define a translation string
$translation = "aeiou";
$replacement = "12345";

// Perform character replacements
$outputString = strtr($inputString, $translation, $replacement);

// Output the result
echo $outputString.PHP_EOL;

?>
<?php

// Input string
$inputString = "I have 3 apples and 2 bananas.";

// Perform custom replacements using a callback function
$outputString = preg_replace_callback(
    '/\d+/',
    function ($matches) {
        return $matches[0] * 2; // Double the numeric values
    },
    $inputString
);

// Output the result
echo $outputString.PHP_EOL;

?>
<?php

$inputString = "The quick brown Fox jumps over the lazy Dog.";
$outputString = str_ireplace("fox", "cat", $inputString);
echo $outputString.PHP_EOL;

?>
<?php

$inputString = "Hello, world!";
$outputString = str_replace("o", "0", $inputString);
echo $outputString.PHP_EOL;

?>
