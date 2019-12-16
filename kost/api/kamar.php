<?php

    //define paramaeters connection
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','kost');

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if (mysqli_connect_errno()) {
        die('Unable to connect to database' . mysqli_connect_error());
    }

    $stmt = $conn->prepare("SELECT * FROM `kamarinfo`;");
    $stmt->execute();
    $stmt->bind_result($id, $nomorkamar, $luaskamar, $harga);
    // $music = array();

    while($stmt->fetch()){


        $temp[] = array(
        "id" => $id,
        "nomorkamar" => $nomorkamar,
        "luaskamar" =>$luaskamar,
        "harga"=>$harga

        );
    }
    $music = array(

        'kamar_list' => $temp
        );

    echo json_encode($music);
    ?>
