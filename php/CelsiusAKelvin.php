<?php
function convertirCelsiusAKelvin($celsius) {
    $formula = "$celsius + 273.15";
    $resultado = $celsius + 273.15;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
function kelvinToCelsius($kelvin) {
    $formula = "$kelvin - 273.15";
    $resultado = $kelvin - 273.15;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>