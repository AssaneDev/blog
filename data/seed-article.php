<?php

$articles = json_decode(file_get_contents('articles.json'), true);
$dns = "mysql:host=localhost;dbname=blog2";
$user = "root";
$password = "H@kkufr@mwork12*";


$pdo = new PDO($dns, $user, $password);
$statement = $pdo->prepare('INSERT INTO articles (title,image,category,content)VALUES(:title,:image,:category,:content)');
foreach ($articles as $article) {
    $statement->bindValue(':title', $article['title']);
    $statement->bindValue(':image', $article['image']);
    $statement->bindValue(':category', $article['category']);
    $statement->bindValue(':content', $article['content']);
    $statement->execute();
}
