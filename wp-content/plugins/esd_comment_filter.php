<?php
/*
Plugin Name: ESD Comment Filter
Description: Remove bad words.
Author: John Doe
Version: 1.0
*/

function esd_comment_filter($sentence)
{
    $badWords = ['fuck', 'hello', 'badword'];

    foreach ($badWords as $badWord) {
        $sentence = str_ireplace($badWord, '***', $sentence);
    }

    return $sentence;
}

add_filter('comment_text', 'esd_comment_filter');
add_filter('the_content', 'esd_comment_filter');
