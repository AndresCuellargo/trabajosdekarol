<?php
function construir_caja() {
    $materiales = ["cartón", "cinta adhesiva", "tijeras"];
    $pasos = [
        "Cortar el cartón según las medidas",
        "Doblar y ensamblar las piezas",
        "Sellar los bordes con cinta adhesiva"
    ];
    return ["Materiales" => $materiales, "Pasos" => $pasos];
}
?>
