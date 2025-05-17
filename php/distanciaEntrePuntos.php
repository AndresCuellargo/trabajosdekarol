<?php
function distanciaEntrePuntos($x1, $y1, $x2, $y2) {
    $formula = "sqrt(($x2 - $x1)^2 + ($y2 - $y1)^2)";
    $resultado = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    return ["Formula" => $formula, "Resultado" => $resultado];
}
?>