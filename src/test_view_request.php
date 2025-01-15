<?php
    echo "Tipo di richiesta" . $_SERVER['REQUST_METHOD'] . "<br>";

    echo "<br>";

    echo "Visualizzazione della variabile \$_REQUEST con echo:<br>";
    //non sempre la echo è la scelta giusta!
    //si aspetta una stringa!
    echo "$_REQUEST<br>";
    echo "<br>";

    echo "Visualizzazione della variabile \$_REQUEST con print_r():<br>";
    print_r ($_REQUEST);
    echo "<br><br>";    
?>"