<?php

function arithmeticOperation($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Tidak dapat melakukan pembagian dengan nol.";
            }
        default:
            return "Operator tidak valid.";
    }
}

$num1 = 10;
$num2 = 5;
$operator = '+';
echo "Hasil dari $num1 $operator $num2 adalah: " . arithmeticOperation($num1, $num2, $operator);
    
?>
