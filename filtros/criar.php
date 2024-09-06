<?php

ob_start();
require('../sheep_core/config.php');

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if (isset($email)) {

    $criar = new Criar();
    var_dump($email);
    exit();
    $dados =
        [
            'email' => $email,
            'data' => date('Y-m-d H:i:s')
        ];

    $criar->Criacao('emails', $dados);

    if ($criar->getResultado()) {
        header('Location: ' . HOME . 'index.php?sucesso=true');
    } else {
        header('Location: ' . HOME . 'index.php?erro=true');
    }
}
