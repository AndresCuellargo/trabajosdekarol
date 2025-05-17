<?php
function volumenCono($radio, $altura) {
    $formula = "(PI * $radio^2 * $altura) / 3";
    $resultado = (PI * pow($radio, 2) * $altura) / 3;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>
