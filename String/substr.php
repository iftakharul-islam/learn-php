<?php

//$string = "https://google.com#color";
// echo $string[0*0];
// $length = strlen($string);
// echo substr($string,-3);

// var_dump( parse_url($string,PHP_URL_FRAGMENT));
// echo substr($string,-3);


$url = 'http://username:password@hostname:9090/path?arg=value#anchor';

// var_dump(parse_url($url));
// var_dump(parse_url($url, PHP_URL_SCHEME));
// var_dump(parse_url($url, PHP_URL_USER));
// var_dump(parse_url($url, PHP_URL_PASS));
// var_dump(parse_url($url, PHP_URL_HOST));
// var_dump(parse_url($url, PHP_URL_PORT));
// var_dump(parse_url($url, PHP_URL_PATH));
// var_dump(parse_url($url, PHP_URL_QUERY));
// var_dump(parse_url($url, PHP_URL_FRAGMENT));
echo "<pre><h1>";
$url = 'http://www.example.com';

// print_r(get_headers($url));

// print_r(get_headers($url, 1));

// stream_context_set_default(
//     array(
//         'http' => array(
//             'method' => 'HEAD'
//         )
//     )
// );
// $headers = get_headers('http://example.com');


// $headers = apache_request_headers();

// foreach ($headers as $header => $value) {
//     echo "$header: $value <br />\n";
// }

// if (isset($_ENV["HOSTNAME"]))
//     $MachineName = $_ENV["HOSTNAME"];
// else if  (isset($_ENV["COMPUTERNAME"]))
//     $MachineName = $_ENV["COMPUTERNAME"];
// else $MachineName = "";
// $fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
echo nl2br("Welcome\r\nThis is my HTML document", false);
// var_dump(get_html_translation_table(HTML_ENTITIES, ENT_COMPAT  | ENT_HTML5));
echo "</pre></h1>";


$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
$fmt = numfmt_create( 'it', NumberFormatter::SPELLOUT );
echo numfmt_format($fmt, 1142)."\n";