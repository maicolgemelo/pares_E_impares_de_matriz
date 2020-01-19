<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Matriz y vectores</title>
    </head>
    <body>
        <?php
        $matriz [0][0] = 45; 
        $matriz [0][1] = 4;
        $matriz [0][2] = 6;
        $matriz [0][3] = 7;

        $matriz [1][0] = 23; 
        $matriz [1][1] = 45;
        $matriz [1][2] = 67;
        $matriz [1][3] = 1;

        $matriz [2][0] = 3; 
        $matriz [2][1] = 4;
        $matriz [2][2] = 7;
        $matriz [2][3] = 9;

        $matriz [3][0] = 5; 
        $matriz [3][1] = 4;
        $matriz [3][2] = 3;
        $matriz [3][3] = 2;

        $matriz [4][0] = 1; 
        $matriz [4][1] = 2;
        $matriz [4][2] = 1;
        $matriz [4][3] = 4;

        for( $fila=0;$fila<5;$fila++){
            for($columna =0;$columna<4;$columna++){
                echo $matriz[$fila][$columna]." ";

            }
            echo "<br>";


        }
        //proceso de ejercicio
        for( $fila=0;$fila<5;$fila++){
            for($columna =0;$columna<4;$columna++){
                if(($matriz[$fila][$columna] % 2)==0 ){
                    $vectorpar[]=$matriz[$fila][$columna];

                }else{
                    $vectorimpar[]=$matriz[$fila][$columna];
                }
            }

        }
        //mostrar los valores del vector con numeros pares
        echo "<br> vector con numero pares: <br>";

        for($i=0;$i<count($vectorpar);$i++){
            echo $vectorpar[$i] . "<br>";
        }

        echo "<br> vector con numero impares: <br>";

        for($i=0;$i<count($vectorimpar);$i++){
            echo $vectorimpar[$i] . "<br>";
        }

        ?>



    </body>




</html>