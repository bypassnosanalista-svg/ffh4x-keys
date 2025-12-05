<?php
function gerarKey() {
    // Parte fixa
    $prefixo = "FFH4X-ANDROID-";

    // Gera 6 caracteres aleatórios (A–Z e 0–9)
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $random = "";
    for ($i = 0; $i < 6; $i++) {
        $random .= $chars[rand(0, strlen($chars) - 1)];
    }

    // Retorna a key completa
    return $prefixo . $random;
}

// Exemplo: gerar uma key
echo gerarKey();
?>
