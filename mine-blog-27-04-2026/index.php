<?php
require_once 'config.php';
require_once 'src/dados/post.php';

echo '<h1> Desenvolvimento do '.SITE_NOME.'</h1>';
echo '<br>';


foreach($posts as $post)
{
    echo "id :". $post['id'] . "<br>";
    echo "Titulo :".  $post['titulo']. "<br>";
    echo "Slug :". $post['slug'] . "<br>";
    echo "autor :". $post['autor'] . "<br>";
    echo "criado em :". $post['data'] . "<br>";

    echo resumo(
        $post['resumo'],
        55,
        'Ler mais',
        $post['slug']
    ) . "<br><br>"; 
}