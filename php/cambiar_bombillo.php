<?php
function cambiar_bombillo() {
    $materiales = ["bombillo nuevo", "destornillador"];
    $pasos = [
        "Apagar la luz",
        "Retirar el bombillo fundido",
        "Colocar el bombillo nuevo",
        "Encender la luz para probar"
    ];
    return ["Materiales" => $materiales, "Pasos" => $pasos];
}
?>
