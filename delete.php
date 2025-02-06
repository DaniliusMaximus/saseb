<?php
$xml = simplexml_load_file("data.xml");

// Удаляем вторую книгу
unset($xml->book[1]);

// Сохраняем изменения
file_put_contents("data.xml", $xml->asXML());

echo "Книга удалена!";
?>
