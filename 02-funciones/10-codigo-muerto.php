<?php

/**
 * Esta función esta hecha por Yirsis Serrano y envia un Email a los usuarios.
 *
 * @param array $users Lista de usuarios a quienes vamos a enviar dicho mail
 * @param string $body Este es el cuerpo del correo a enviar
 *
 * @return void No retorna nada
 *
 * @deprecated Esta funcion fue sustituida en la version 3.0.2 por la funcion sendMailToAll
 *
 * @link https://yirsis-serrano.com
 * @version 3.0.1
 * @since Remove body param
 *
 */
function sendMail(array $users, string $body)
{
}

function sendMailToAll(array $users, string $body)
{
}

sendMailToAll();

