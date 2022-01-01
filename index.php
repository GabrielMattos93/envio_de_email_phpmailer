<?php

require_once 'enviar.php';

$assunto = 'assunto aqui';
$mensagem = 'mensagem aqui';

if(send($assunto, $mensagem))
{
    echo "Enviado";
}
else{
    echo "erro";
}

?>