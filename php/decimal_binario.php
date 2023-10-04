<?php
$binario = "";

    echo "Escribe un número entero: \n";

    while(true)
    {
        
        $numero = fgets(STDIN);
        $numero = trim($numero);

        if (ctype_digit($numero)) 
        {
            $numero_entero = (int)$numero;

            if ($numero_entero < 0) 
            {
            } else {
                while ($numero_entero > 0) {
                    $resto = $numero_entero % 2;
                    $binario = $resto . $binario;
                    $numero_entero = (int)($numero_entero / 2);
                    }

                echo "El número en binario es: $binario";
                
                break;
                
                    }
        } else {
            echo "Ingresa un número entero válido \n";
               }
    }
?>
