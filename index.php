<form method="get">
    <input type="text" placeholder="parola da censurare" name="badword">
    <input type="submit">
</form>


<?php
    // original string
    $text = 'sono andato al supermercato a comprare il pane:';
    echo $text;
    echo "<br>" .strlen($text);

    // censored
    $badword = $_GET['badword'];
    echo "<br>" .$replaced = str_replace($badword, "***", $text);
    echo "<br>" .strlen($replaced);
?>