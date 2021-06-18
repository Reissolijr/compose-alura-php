<?php

require_once 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'http://www.drmoacir.com.br']);
$crawler = new crawler();

$buscador = new Buscador($client,$crawler);
$cursos = $buscador->buscar('/site/suplementos');

foreach ($cursos as $curso ) {
    echo $curso . PHP_EOL;
}