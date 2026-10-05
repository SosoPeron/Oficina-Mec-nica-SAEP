<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página Inicial</title>
    </head>
    <body>
        <h1>Página Inicial</h1>
        <h2>oficina Mecânica</h2>
        <h3>Bem vindo, <?= sesion()->get('usuario') ['USU_NOME'] ?>!</h3>
        <a href="<?= base_url('clientes') ?>">
        <button>Gestão de Clientes<?button></a>
