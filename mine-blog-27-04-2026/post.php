<?php
require_once 'config.php';
require_once 'src/dados/post.php';


if(isset($_GET['post']))
{
    if($_GET['post'] == 'aprendendo-php-do-zero')
    {
    // se for igual a essa url
        header('Location: src/poster/basico-php.php');
    }
    if($_GET['post'] == 'o-que-sao-arrays-no-php')
    {
        header('Location: src/poster/arrays.php');
    }

}