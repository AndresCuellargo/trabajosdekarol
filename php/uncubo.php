<?php
function uncubo($base, $profundidad, $altura) {
    $formula = "$base * $profundidad * $altura";
    $resultado = $base * $profundidad * $altura;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>
