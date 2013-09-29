<?php

include("./likeurl.php");


$link = new LikeUrl();

$urls = array(
            "www.google.com",
            "www.esporteinterativo.com.br"
);

$dados =  $link->getLikes($urls);

var_dump($dados);


?>
