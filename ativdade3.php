<?php

function quantidade($array) {
    return count($array);
}

$númerosDigitados = [];
    $soma = 0;

while (true) {
    $num = readline("Escreva qualquer número: ");
    if ($num < 0) {
        break;
    }
    $númerosDigitados[] = $num;
    $soma += $num;
}
$quantidade =
    quantidade($númerosDigitados);
if ($quantidade > 0) {
    $media = $soma / $quantidade;
    echo "A media dos números é:
    $media";
}

?>

}