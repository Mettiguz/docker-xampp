<?php
    echo "Tipo di richiesta" . $_SERVER['REQUEST_METHOD'] . "<br>";

    echo "<br>";

    echo "Visualizzazione della variabile \$_REQUEST con print_r():<br>";
    print_r ($_REQUEST);
    echo "<br><br>";    

    echo"Visualizzazione della variabile \$_SERVER con var_dump():<br>";
    print_r ($_SERVER);
    echo "<br><br>";  

    echo "contenuto della richiesta:<br>";
    if($_SERVER['REQUEST_METHOD']=== 'GET')
    {

    }


?>