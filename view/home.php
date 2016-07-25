<div class="main">
<div class="left">
    <?php

    $dirName = '';

    if(isset($_GET['article'])) {
        $dirName = str_replace('.php', '', $_GET['article']);
        $myLink = 'model/articles/' . $dirName .'/' .$_GET['article'];
    } else {
        $myLink = 'model/articles/article001/article001.php';
    }
    include ($myLink);
    ?>
</div>
<div class="right">

    <?php
    echo '<div class="linkbox">' .'<h2>Some Articles!</h2>' .'</div>';
    $xml = simplexml_load_file("model/articles/articles.xml");

    for ($i = 0; $i < sizeof($xml); $i++){
        echo '<div class="linkbox">';
//        echo 'article : ' . $xml->article[$i]->title . ".md\n";
//        echo 'linktext : ' . $xml->article[$i]->linktext . "\n";
//        echo 'php file : ' . $xml->article[$i]->file . "\n\n";

        $title = $xml->article[$i]->title;
        $linktext = $xml->article[$i]->linktext;
        $file = $xml->article[$i]->file;

        $myLink = 'model/articles/' . $title . '/' . $file . '>' . $linktext;
        $currentUrl = $_SERVER["SCRIPT_NAME"];

        echo '<a href=' . $currentUrl . '?article=' . $file . '>' . $linktext . '</a>';
        echo '</div>';
    }
    ?>

</div>
</div>