
<?php

require 'Article.php' ; 
require 'ArticleManager.php' ;
require 'Notify.php' ;


$notify = new Notify();
$searchEngine = new SearchEngine();
$articleManager = new ArticleManager();

$articleManager->attach($notify);
$articleManager->attach($searchEngine);


$article = new Article();
$article->setTitle('Titre de l\'article n°1');

$articleManager->create($article);


?>
