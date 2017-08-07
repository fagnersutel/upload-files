<?php
require_once './Classes/Upload.class.php';
$pasta = 'downloads/';
$tamanho = 1024 * 1024 * 20; // 2Mb
$extensoes = array('jpg', 'png', 'gif', 'pdf', 'doc', 'docx');
$upl = new Upload($pasta, $tamanho, $extensoes);
$upl->uploaddados();