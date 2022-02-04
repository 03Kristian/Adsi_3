<?php
    require_once('01_ClaseAuto.php');

    $objvehiculo =new Vehiculo("MCM-930","Mazda",2020, 45500, 70, 30);
    $objvehiculo->getvehiculo();
    
    print_r('<pre>');
    print_r($objvehiculo);
    print_r('<pre>');

    echo"<br>";
    echo $objvehiculo->marca;

    //$objvehiculo->getdistancia();
    echo '<br>';
    echo "La distancia recorrida del vehiculo es: ".$objvehiculo->distancia();
    //print_r();

?>