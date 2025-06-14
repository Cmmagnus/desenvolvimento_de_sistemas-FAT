<?php
// Garante que a sessão só será iniciada uma vez
// Inicia a sessão para usar variáveis globais de usuário, mensagens, etc.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
define("DB_NAME", "moviestar"); // Nome do banco
define("DB_HOST", "localhost"); // Host (localhost para desenvolvimento local)
define("DB_USER", "root"); // Usuário padrão do XAMPP
define("DB_PASS", ""); // Senha em branco (cuidado em produção)
// URL base dinâmica — funciona perfeitamente mesmo em pastas como /programacao_avancada/Projeto-T2
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
$SITE_NAME = "MovieStar"; // Nome do site para reutilizar no título, etc.
$LANG = "pt-BR"; // Idioma padrão, útil se for usar traduções ou <html lang="">
// Configura fuso horário — importante para datas e logs no PHP
date_default_timezone_set("America/Sao_Paulo");
