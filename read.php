<?php
$xml = simplexml_load_file("data.xml"); // Загружаем XML-файл

foreach ($xml->book as $book) {
    echo "Название: " . $book->title . "<br>";
    echo "Автор: " . $book->author . "<br>";
    echo "Год: " . $book->year . "<br><br>";
}
?>
