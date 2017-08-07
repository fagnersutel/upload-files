<?php
require_once './Classes/Upload.class.php';
$upl = new Upload($pasta, $tamanho, $extensoes);
$upl->uploaddados();