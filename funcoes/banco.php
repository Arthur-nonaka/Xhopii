<?php
function Conectar()
{
    $conexao = new mysqli("127.0.0.1", "root", "", "xhopii");
    return $conexao;
}

