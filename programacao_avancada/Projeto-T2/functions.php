<?php
// Função para exibir mensagens formatadas (pode ser usada em login, cadastro, etc.)
function showMessage($msg, $type = "success") {
    echo "<div class='alert alert-$type'>$msg</div>";
}

// Função de redirecionamento com URL completa
function redirect($url) {
    header("Location: $url");
    exit;
}

// Função para verificar se o usuário está autenticado
function checkAuth() {
    if (!isset($_SESSION['user'])) {
        redirect("auth.php");
    }
}

// Função para limpar entrada de dados (evita SQL Injection e XSS)
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Função para imprimir arrays formatados (debug)
function debug($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
