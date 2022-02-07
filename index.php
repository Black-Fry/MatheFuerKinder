<?php

function result ($a, $b, $op)
{
    switch ($op)
    {
        case "+":
            return ($a + $b);
        case "-":
            return ($a - $b);
        case "*":
            return ($a * $b);
        case ":":
            return ($a / $b);
        default:
            return (0);
    }
}

echo ('<!DOCTYPE html>
        <html lang="de">
            <head>
                <meta charset="UTF-8">
                <link rel="icon" href="fswFavIcon.png" sizes="32x32" />
                
                <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
                <link rel="stylesheet" href="inputGlow.css">
                <link rel="stylesheet" href="snackbar.css">               
                
                <script src="disableAndToast.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            </head>
            <body translate="no" >');


for ($i=0;$i<15;$i++)
{
    $zahl1  =   rand(0, 10);
    $zahl2  =   rand(0, 10);
    
    $operator = rand(0,3);
    
    switch ($operator)
    {
        case 0:
            $operator   =   "+";
            $zahl1  =   rand(0, 100);
            $zahl2  =   rand(0, 100);
            break;
        case 1:
            $operator   =   "-";
            $zahl1  =   rand(0, 100);
            $zahl2  =   rand(0, $zahl1);
            break;
        case 2:
            $operator   =   "*";
            $zahl1  =   rand(0, 10);
            $zahl2  =   rand(0, 10);
            break;
        default:
            $operator   =   ":";
            $zahl1  =   rand(3, 9);
            $zahl2  =   rand(1, 10);
            $zahl1  =   $zahl1 * $zahl2;
            break;
    }
    
    $result = result($zahl1, $zahl2, $operator);
    
    echo ('<div>'
        . '<input type="text" id="a" name="a" size="10" value="' . $zahl1 .'" disabled>'
        . '<input type="text" id="a" name="a" size="5" value="' . $operator . '" disabled>'
        . '<input type="text" id="a" name="a" size="10" value="'. $zahl2 .'" disabled>'
        . '<input type="text" id="a" name="a" size="5" value="=" disabled>'
        . '<input type="number" id="res_' . $i . '" name="res_' . $i . '" size="10" onchange="disableAndShowToast (this.id, ' . $i . ', ' . $result . ')">'
        . '<input type="text" id="corr_' . $i . '" name="corr_' . $i . '" size="2" value="" style="visibility: hidden; background-color: green;" disabled>'
        . '<input type="text" id="false_' . $i . '" name="false_' . $i . '" size="2" style="visibility:hidden; background-color: coral;" disabled>'
        . '</div>');
}



//wird nur eingebelndet, wenn ein teXtfeld eine Änderung erfahren und anschließend das Feld den Fokus verloren hat
echo ('<div id="snackbar">Änderung gespeichert!</div>');
        