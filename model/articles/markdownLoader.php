<?php
include("lib/php/Parsedown.php");
include("lib/php/ParsedownExtra.php");

function loadMarkdown($articleName){
    $Extra = new ParsedownExtra();
    echo '<div class="markdown_container">';
    $myFilePath = __FILE__;
    $myFilePath = str_replace(basename(__FILE__), "", $myFilePath) .$articleName .'/markdown/' .$articleName.'.md';
    $markdownString = file_get_contents($myFilePath);
    echo $Extra->text($markdownString);
    echo '</div>';
}
