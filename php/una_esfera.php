<?php
function una_esfera($radio) {
    $formula = "(4/3) * PI * $radio^3";
    $resultado = (4/3) * PI * pow($radio, 3);
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>
