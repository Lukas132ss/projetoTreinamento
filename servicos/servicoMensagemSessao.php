<?php

session_start();

function setarMensagemSucesso(string $mensagens) : void {
    $_SESSION['mensagem de sucesso'] = $mensagens;
}

function obterMensagemSucesso() : ?string {
    if(isset($_SESSION['mensagem de sucesso'])) {
        return $_SESSION['mensagem de sucesso'];
    }
    return null;
}

function setarMensagemErro(string $mensagens) : void {
    $_SESSION['mensagem de erro'] = $mensagens;
}

function obterMensagemErro() : ?string {
    if(isset($_SESSION['mensagem de erro'])) {
        return $_SESSION['mensagem de erro'];
    }
    return null;
}

function removerMensagemSucesso() : void {
    if(isset($_SESSION['mensagem de sucesso'])) {
        unset($_SESSION['mensagem de sucesso']);
    }
}

function removerMensagemErro() : void {
    if(isset($_SESSION['mensagem de erro'])) {
        unset($_SESSION['mensagem de erro']);
    }
}