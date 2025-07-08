<?php
function gastoFumante($anos, $cigarroPorDia, $precoCarteira, $cigarrosPorCarteira = 20) {
    $totalDias = $anos * 365;
    $totalCigarros = $cigarroPorDia * $totalDias;
    $carteiras = ceil($totalCigarros / $cigarrosPorCarteira);
    $totalGasto = $carteiras * $precoCarteira;
    return $totalGasto;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anos = $_POST['anos'];
    $cigarrosPorDia = $_POST['cigarrosPorDia'];
    $precoCarteira = $_POST['precoCarteira'];

    echo "Total Gasto: R$ " . gastoFumante($anos, $cigarrosPorDia, $precoCarteira);
} else {
    echo "Acesse pelo formulário.";
}
?>