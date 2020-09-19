<?php

$waysToSayHello = [
    'emoji' => "\u{1F44B}",
    'latinchars' => "Hello",
    'accentedChars' => "ca va?"
];

foreach ($waysToSayHello as $method => $string) {
    echo "$method : encoding [" . mb_detect_encoding($string, 'ISO-8859-1') . '] ' .
        'encoding [' . mb_detect_encoding($string, ['ASCII', 'UTF-8']) . '] ' .
        'strlen [' . strlen($string) . '] ' .
        'mb_strlen [' . mb_strlen($string) . '] ' .
        'first character[' .$string[0] . ']';
    echo "\r\n";
}

// strlen - returns how many bytes are in the string