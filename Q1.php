<?php 
function result($operation) {
    $array= explode(' ', $operation);
    switch($array[1]) {
        case '+':
            $result = $array[0] + $array[2];
            break;
        case '-':
            $result = $array[0] - $array[2];
            break;
        case '*':
            $result = $array[0] * $array[2];
            break;
        case '/':
            $result = $array[0] / $array[2];
            break;
        default:
            echo "wrong input";
    }
    print_r($result);
};
?>