<?php
require_once './Classes/Upload.class.php';
$pasta = 'downloads';
$tamanho = 1024 * 1024 * 20;
$extensoes = rray('jpg', 'png', 'gif');
$up = new Upload($pasta, $tamanho, $extensoes);

