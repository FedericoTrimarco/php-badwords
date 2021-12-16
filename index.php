<?php
    // original string
    $text = 'sono andato al supermercato a comprare il pane:';
    echo $text;
    echo strlen($text);

    echo "<br>";

    // censored
    $badword = $_GET['badword'];
    echo $replaced = str_replace($badword, "***", $text);
    echo strlen($replaced);
?>