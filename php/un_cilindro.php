<?php
function un_cilindro($radio, $altura) {
    $formula = "PI * $radio^2 * $altura";
    $resultado = PI * pow($radio, 2) * $altura;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>
