<?php
// Define a constante BASE_URL com o caminho base do servidor onde o projeto está hospedado
// Útil para criar links relativos automaticamente em qualquer ambiente
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
