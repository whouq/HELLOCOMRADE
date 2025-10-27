<?php
include_once ('./templates/partials/header.php');
include_once ('./templates/partials/calc_form.php');

if( isset($_POST["btn_calc"])) {
    $numb1 = $_POST["numb1"];
    $numb2 = $_POST["numb2"];
    $operator = $_POST["operator"];
    $result ='';
    switch($operator) {
        case "+": $result= "$numb1 + $numb2=" . $numb1+$numb2; break;
        case "-": $result= $numb1-$numb2; break;
        case "*": $result= $numb1*$numb2; break;
        case  "/":
            if ($numb2!=0)
            {
                $result = $numb1/$numb2;
            }
            else
            {
                $result = "Ошибка";
            }
            break;
        default: $result = 'error';
    }
    print $result;
}