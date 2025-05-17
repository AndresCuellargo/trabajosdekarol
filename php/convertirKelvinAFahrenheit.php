<?php
function convertirKelvinAFahrenheit($kelvin) {
    $formula = "($kelvin - 273.15) * 9/5 + 32";
    $resultado = ($kelvin - 273.15) * 9/5 + 32;
    return ["Formula" => $formula, "Resultado" => $resultado];
}

$kelvinValue = 300;
$result = convertirKelvinAFahrenheit($kelvinValue);
print_r($result);

?>