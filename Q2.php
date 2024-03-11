<?php 
function filter($input) {
    $output = [];
    for ($i=0; $i < strlen($input); $i++) { 
        if(ctype_digit($input[$i])){
            array_push($output, $input[$i]);
        }
    }
    sort($output);
    print_r($output);
}
filter("hpd12aq3@8w$5");
?>