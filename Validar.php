<?php
if (!isset($_GET['key'])) {
    die("ERRO: Nenhuma key enviada.");
}

$key = trim($_GET['key']);

// Ler todas as keys do arquivo
$keys = file("keys.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Verifica se a key existe
if (in_array($key, $keys)) {
    echo "VALIDA";
} else {
    echo "INVALIDA";
}
?>
