<?php
function areaTriangulo($base, $altura) {
    $formula = "($base * $altura) / 2";
    $resultado = ($base * $altura) / 2;
    return ["Formula" => $formula, "Resultado" => $resultado];
}
$result = areaTriangulo(5, 10);
echo "Formula: " . $result["Formula"] . "\n";
echo "Resultado: " . $result["Resultado"] . "\n";

?>