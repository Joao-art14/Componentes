<?php 
function router(){
    echo "2.Router está analisando a URL.<br>";
    $rota = "/usuarios";
    $paramentro = "id=123";
    middleware($rota);
}