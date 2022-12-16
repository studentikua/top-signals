<?php
echo var_dump($_POST);

$message;
foreach ( $_POST as $key => $value ) {
    if ($value != "") {
        $message .= "$key - $value"."\n";
    }
}
$f = fopen("leads.txt", "a+") or die("Ошибка");
// Записать текст
fwrite($f, $message .= "\n"); 
// Закрыть текстовый файл
fclose($f);


