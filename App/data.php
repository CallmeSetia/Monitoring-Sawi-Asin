<?php
    include "./connection.php";

    //$connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
    $connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);

    $sqlA = mysqli_query($connection, "SELECT * FROM data_sensor_a ORDER BY id DESC LIMIT 10");
    $sqlB = mysqli_query($connection, "SELECT * FROM data_sensor_b ORDER BY id DESC LIMIT 10");
    $sqlC = mysqli_query($connection, "SELECT * FROM data_sensor_c ORDER BY id DESC LIMIT 10");
    $sqlD = mysqli_query($connection, "SELECT * FROM data_sensor_d ORDER BY id DESC LIMIT 10");
    $sqlE = mysqli_query($connection, "SELECT * FROM data_sensor_e ORDER BY id DESC LIMIT 10");
    $sqlF = mysqli_query($connection, "SELECT * FROM data_sensor_f ORDER BY id DESC LIMIT 10");
    $sqlG = mysqli_query($connection, "SELECT * FROM data_sensor_g ORDER BY id DESC LIMIT 10");
    $sqlH = mysqli_query($connection, "SELECT * FROM data_sensor_h ORDER BY id DESC LIMIT 10");
    $sqlI = mysqli_query($connection, "SELECT * FROM data_sensor_i ORDER BY id DESC LIMIT 10");
    $sqlABrief = mysqli_query($connection, "SELECT * FROM data_sensor_a WHERE id=(SELECT max(id) FROM data_sensor_a)");
    $sqlBBrief = mysqli_query($connection, "SELECT * FROM data_sensor_b WHERE id=(SELECT max(id) FROM data_sensor_b)");
    $sqlCBrief = mysqli_query($connection, "SELECT * FROM data_sensor_c WHERE id=(SELECT max(id) FROM data_sensor_c)");
    $sqlDBrief = mysqli_query($connection, "SELECT * FROM data_sensor_d WHERE id=(SELECT max(id) FROM data_sensor_d)");
    $sqlEBrief = mysqli_query($connection, "SELECT * FROM data_sensor_e WHERE id=(SELECT max(id) FROM data_sensor_e)");
    $sqlFBrief = mysqli_query($connection, "SELECT * FROM data_sensor_f WHERE id=(SELECT max(id) FROM data_sensor_f)");
    $sqlGBrief = mysqli_query($connection, "SELECT * FROM data_sensor_g WHERE id=(SELECT max(id) FROM data_sensor_g)");
    $sqlHBrief = mysqli_query($connection, "SELECT * FROM data_sensor_h WHERE id=(SELECT max(id) FROM data_sensor_h)");
    $sqlIBrief = mysqli_query($connection, "SELECT * FROM data_sensor_i WHERE id=(SELECT max(id) FROM data_sensor_i)");
    $sqlGraphA = mysqli_query($connection, "SELECT nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 10");
    $result = array();

    while ($row = mysqli_fetch_assoc($sqlA)) {
        $dataA[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlB)) {
        $dataB[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlC)) {
        $dataC[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlD)) {
        $dataD[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlE)) {
        $dataE[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlF)) {
        $dataF[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlG)) {
        $dataG[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlH)) {
        $dataH[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlI)) {
        $dataI[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlABrief)) {
        $dataABrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlBBrief)) {
        $dataBBrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlCBrief)) {
        $dataCBrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlDBrief)) {
        $dataDBrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlEBrief)) {
        $dataEBrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlFBrief)) {
        $dataFBrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlGBrief)) {
        $dataGBrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlHBrief)) {
        $dataHBrief[] = $row;
    }
    if ($row = mysqli_fetch_assoc($sqlIBrief)) {
        $dataIBrief[] = $row;
    }
    while ($row = mysqli_fetch_assoc($sqlGraphA)) {
        $dataAGraph[] = $row;
    }
    /*if(mysqli_connect_error()){
        echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
    }else{

    }
    $sql = mysqli_query($connect, "SELECT * FROM data");
    $result = array();

    while ($row = mysqli_fetch_assoc($sql){
        $data[] = $row;
    }
    */

    echo json_encode(array("resultA"=>$dataA, "resultB"=>$dataB, "resultC"=>$dataC,
        "resultD"=>$dataD, "resultE"=>$dataE, "resultF"=>$dataF,
        "resultG"=>$dataG, "resultH"=>$dataH, "resultI"=>$dataI,
        "resultABrief"=>$dataABrief, "resultBBrief"=>$dataBBrief, "resultCBrief"=>$dataCBrief,
        "resultDBrief"=>$dataDBrief, "resultEBrief"=>$dataEBrief, "resultFBrief"=>$dataFBrief,
        "resultGBrief"=>$dataGBrief, "resultHBrief"=>$dataHBrief, "resultIBrief"=>$dataIBrief,
        "resultGraphA"=>$dataAGraph
    ));
