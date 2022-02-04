<?php
    require_once('01_ClaseAuto.php');

    $objvehiculo =new Vehiculo("MCM-930","Mazda",2020, 45500, 70, 30);
    $objvehiculo->getvehiculo();
    
    print_r('<pre>');
    print_r($objvehiculo);
    print_r('<pre>');

    echo"<br>";
    echo $objvehiculo->getmarca();
    echo"<br>";
    echo $objvehiculo->setmarca("FORD");
    echo $objvehiculo->getmarca();
    echo"<br>";
    echo $objvehiculo->modelo;
    echo '<br>';
    echo "La distancia recorrida del vehiculo es: ".$objvehiculo->distancia();
    //print_r();

?>