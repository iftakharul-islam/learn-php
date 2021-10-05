<?php

// $za = new ZipArchive();

// $za->open('test.zip');
// echo "<pre><h1>";
// print_r($za);
// var_dump($za);
// echo "</pre></h1>";
// echo "numFiles: " . $za->numFiles . "\n";
// echo "status: " . $za->status  . "\n";
// echo "statusSys: " . $za->statusSys . "\n";
// echo "filename: " . $za->filename . "\n";
// echo "comment: " . $za->comment . "\n";
// echo "<pre><h1>";
// for ($i=0; $i<$za->numFiles;$i++) {
//     echo "index: $i\n";
//     print_r($za->statIndex($i));
// }
// echo "</pre></h1>";
// echo "numFile:" . $za->numFiles . "\n";


// $zip = zip_open("test.zip");

// if ($zip) {
//     while ($zip_entry = zip_read($zip)) {
//         echo "Name:               " . zip_entry_name($zip_entry) . "\n";
//         echo "Actual Filesize:    " . zip_entry_filesize($zip_entry) . "\n";
//         echo "Compressed Size:    " . zip_entry_compressedsize($zip_entry) . "\n";
//         echo "Compression Method: " . zip_entry_compressionmethod($zip_entry) . "\n";
//         if (zip_entry_open($zip, $zip_entry, "r")) {
//             echo "File Contents:\n";
//             $buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
//             echo "$buf\n";
//             zip_entry_close($zip_entry);
//         }
//         echo "\n";
//     }
//     zip_close($zip);
// }


$sim = similar_text('fo00000000000000o', '0fo00000000000000o', $perc);
echo "similarity: $sim ($perc %)\n";
// $sim = similar_text('barfoo', 'bafoobar', $perc);
// echo "similarity: $sim ($perc %)\n";
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;
$number = cal_days_in_month(CAL_GREGORIAN, 8,2021); // 31
echo "There were {$number} days in August 2003";

$length = strlen($string)-1;

for ($i=0,$r=$length; $i <=$length ; $i++) { 
    echo $string[$r--];
}

?>