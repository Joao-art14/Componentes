<?php
function middleware($rota){
    echo "3.Middleware está verificando a requisição.<br>";
    $permitido = false;

    if (!$permitido) {
    echo "4.Middleware permitiu continuar.<br>";
    dispacher($rota);
}   else if($permitido){
    echo "4.Middleware bloqueou a requisição.<br>";
}
}