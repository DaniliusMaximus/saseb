<?php
$xml = simplexml_load_file("data.xml");

// Изменяем название первой книги
$xml->book[0]->title = "PHP: Быстрый старт";

// Сохраняем изменения
file_put_contents("data.xml", $xml->asXML());

echo "Книга обновлена!";
?>
