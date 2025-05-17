<?php
function hacerunalimonada() {
    $ingredientes = ["limones", "agua", "azúcar"];
    $pasos = [
        "Exprimir los limones",
        "Mezclar el jugo con agua",
        "Añadir azúcar al gusto",
        "Servir fría"
    ];
    return ["Ingredientes" => $ingredientes, "Pasos" => $pasos];
}
?>
