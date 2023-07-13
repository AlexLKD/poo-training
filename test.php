<?php

$content = file_get_contents('App/Templates/page.html');

spl_autoload_register();

use App\Views\View;

$datas = [
    'title' => 'le titre de la page',
    'title2' => 'hello world',
    'text' => 'coucou les gens !'
];

$page = new View($datas, 'App/Templates/page.html');
echo $page->getContentHtml();
