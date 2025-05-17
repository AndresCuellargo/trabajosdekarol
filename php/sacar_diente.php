<?php
function sacar_diente($paciente) {
    $pasos = [
        "Aplicar anestesia",
        "Usar herramientas adecuadas",
        "Extraer el diente cuidadosamente",
        "Colocar gasas y dar recomendaciones"
    ];
    return ["Paciente" => $paciente, "Pasos" => $pasos];
}

?>
