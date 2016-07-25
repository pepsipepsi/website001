<?php
include(dirname(__FILE__).'/../markdownLoader.php');

$markFile = str_replace('.php', '', basename(__FILE__));
loadMarkdown(basename($markFile));