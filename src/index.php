<?php
require "vendor/autoload.php";

use DiDom\Document;

$document = new Document('https://www.mercadolivre.com.br/', true);

$posts = $document->find('title');

foreach($posts as $post) {
    echo $post->text(), "\n";
}
?>