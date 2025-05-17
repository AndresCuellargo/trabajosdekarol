<?php
function convertirFahrenheitAKelvin($fahrenheit) {
    $formula = "($fahrenheit - 32) * 5/9 + 273.15";
    $resultado = ($fahrenheit - 32) * 5/9 + 273.15;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>