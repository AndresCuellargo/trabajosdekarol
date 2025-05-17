<?php
function convertirCelsiusAFahrenheit($celsius) {
    $formula = "($celsius * 9/5) + 32";
    $resultado = ($celsius * 9/5) + 32;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>
