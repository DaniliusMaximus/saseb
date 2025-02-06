<?php
$xml = simplexml_load_file("data.xml");

// Добавляем новую книгу
$newBook = $xml->addChild("book");
$newBook->addChild("title", "Практический PHP");
$newBook->addChild("author", "Александр Смирнов");
$newBook->addChild("year", "2025");

// Сохраняем изменения
file_put_contents("data.xml", $xml->asXML());

echo "Книга добавлена!";
?>
