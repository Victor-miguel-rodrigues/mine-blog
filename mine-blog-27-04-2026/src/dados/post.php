<?php
require_once 'src/funcoes_importantes.php';

$posts = [
   [
    'id' => geradorId(),
    'titulo' => "Aprendendo PHP do zero",
    "slug" => slug("Aprendendo PHP do zero"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2024/04/27"),
    'resumo' => 'Começar com PHP pode parecer difícil, mas com prática constante é possível evoluir rapidamente. O importante é entender variáveis, estruturas de controle e como o PHP funciona no servidor.'

   ],
    [
    'id' => geradorId(),
    'titulo' => "O que são arrays no PHP",
    "slug" => slug("O que são arrays no PHP"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2025/05/12"),
    'resumo' => 'Arrays são estruturas fundamentais para armazenar múltiplos dados. Eles permitem organizar informações como listas, usuários e produtos dentro do sistema.'

   ],
      [
    'id' => geradorId(),
    'titulo' => "Criando seu primeiro sistema",
    "slug" => slug("Criando seu primeiro sistema"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2026/04/22"),
    'resumo' => 'Depois de aprender o básico, o próximo passo é criar um sistema simples. Mesmo sem banco de dados, já é possível simular funcionalidades reais com arrays.'

   ],
      [
    'id' => geradorId(),
    'titulo' => "Entendendo o foreach",
    "slug" => slug("Entendendo o foreach"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2025/01/27"),
    'resumo' => 'O foreach é uma estrutura essencial para percorrer arrays. Ele simplifica a leitura de dados e é muito usado em sistemas reais.'
    
    ],
    [
    'id' => geradorId(),
    'titulo' => "Criando slugs para URLs",
    "slug" => slug("Criando slugs para URLs"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2026/04/15"),
    'resumo' =>'Slugs são versões simplificadas de textos usadas em URLs. Eles melhoram a leitura e organização das páginas do sistema.'

   ],
      [
    'id' => geradorId(),
    'titulo' => "Como funciona o '\$_SERVER'",
    "slug" => slug("Como funciona o '\$_SERVER'"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2025/03/02"),
    'resumo' => " variável '\$_SERVER' permite acessar dados importantes da requisição, como URL, método e nome do servidor."

   ],
      [
    'id' => geradorId(),
    'titulo' => "Simulando banco de dados com arrays",
    "slug" => slug("Simulando banco de dados com arrays"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2024/04/22"),
    'resumo' =>'Antes de usar banco de dados, você pode simular dados com arrays. Isso ajuda a entender a lógica antes de complicar o projeto.'

   ],
      [
    'id' => geradorId(),
    'titulo' => "Sistema de assistência técnica",
    "slug" => slug("Sistema de assistência técnica"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2026/04/28"),
    'resumo' => 'eparar arquivos e funções é essencial para manter o projeto organizado e fácil de manter.'

   ],
      [
    'id' => geradorId(),
    'titulo' => "Próximos passos no PHP",
    "slug" => slug("Próximos passos no PHP"),
    'autor' => 'Vitinho',
    'data' => formantandoData("2026/04/22"),
    'resumo' => 'Depois do básico, é hora de aprender POO, banco de dados e construir sistemas completos.'

   ],
];