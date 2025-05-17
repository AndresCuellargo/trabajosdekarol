<?php
$tasaDolar = 4000;
$tasaBolivar = 0.001;
$tasaSol = 1000;
$tasaPeseta = 600;
$tasaFranco = 4500;

function convertirMoneda($cantidad, $tasa) {
    $formula = "$cantidad * $tasa";
    $resultado = $cantidad * $tasa;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>