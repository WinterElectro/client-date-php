<?php
if (isset($_POST['date']) and $_POST['date']) {
    $file = fopen('date.txt', 'a');

    fwrite($file, $_POST['date']. "\n");
}
?>