<?php
function convertirKelvinACelsius($kelvin) {
    $formula = "$kelvin - 273.15";
    $resultado = $kelvin - 273.15;
    return ["Formula" => $formula, "Resultado" => $resultado, "Unidad" => "Celsius"];
}
?>
