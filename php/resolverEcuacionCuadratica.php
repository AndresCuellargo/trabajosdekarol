<?php
function resolverEcuacionCuadratica($a, $b, $c) {
    $discriminante = pow($b, 2) - 4 * $a * $c;
    if ($discriminante < 0) {
        return "No hay soluciones reales.";
    }
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    return ["x1" => $x1, "x2" => $x2];
}
?>