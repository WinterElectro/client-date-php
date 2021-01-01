<?php
if (isset($_POST['date']) and $_POST['date'] != "") {
    // Here you get the date on the server side, where you can save it wherever you want. In the example it is saved in a text file
    // Acá obtienes la fecha del lado del servidor, donde puedes guardarlo donde quieras. En el ejemplo se guarda en un archivo de texto
    $file = fopen('date.txt', 'a');
    fwrite($file, $_POST['date']. "\n");
}
?>