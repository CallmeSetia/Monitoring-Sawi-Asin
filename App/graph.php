<?php
include "./connection.php";

//$connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);

$sqlGraphA1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 0,1");
$sqlGraphA2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 1,1");
$sqlGraphA3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 2,1");
$sqlGraphA4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 3,1");
$sqlGraphA5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 4,1");
$sqlGraphA6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 5,1");
$sqlGraphA7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 6,1");
$sqlGraphA8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 7,1");
$sqlGraphA9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 8,1");
$sqlGraphA10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_a ORDER BY id DESC LIMIT 9,1");

$sqlGraphB1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 0,1");
$sqlGraphB2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 1,1");
$sqlGraphB3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 2,1");
$sqlGraphB4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 3,1");
$sqlGraphB5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 4,1");
$sqlGraphB6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 5,1");
$sqlGraphB7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 6,1");
$sqlGraphB8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 7,1");
$sqlGraphB9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 8,1");
$sqlGraphB10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_b ORDER BY id DESC LIMIT 9,1");

$sqlGraphC1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 0,1");
$sqlGraphC2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 1,1");
$sqlGraphC3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 2,1");
$sqlGraphC4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 3,1");
$sqlGraphC5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 4,1");
$sqlGraphC6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 5,1");
$sqlGraphC7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 6,1");
$sqlGraphC8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 7,1");
$sqlGraphC9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 8,1");
$sqlGraphC10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_c ORDER BY id DESC LIMIT 9,1");

$sqlGraphD1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 0,1");
$sqlGraphD2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 1,1");
$sqlGraphD3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 2,1");
$sqlGraphD4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 3,1");
$sqlGraphD5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 4,1");
$sqlGraphD6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 5,1");
$sqlGraphD7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 6,1");
$sqlGraphD8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 7,1");
$sqlGraphD9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 8,1");
$sqlGraphD10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_d ORDER BY id DESC LIMIT 9,1");

$sqlGraphE1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 0,1");
$sqlGraphE2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 1,1");
$sqlGraphE3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 2,1");
$sqlGraphE4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 3,1");
$sqlGraphE5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 4,1");
$sqlGraphE6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 5,1");
$sqlGraphE7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 6,1");
$sqlGraphE8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 7,1");
$sqlGraphE9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 8,1");
$sqlGraphE10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_e ORDER BY id DESC LIMIT 9,1");

$sqlGraphF1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 0,1");
$sqlGraphF2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 1,1");
$sqlGraphF3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 2,1");
$sqlGraphF4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 3,1");
$sqlGraphF5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 4,1");
$sqlGraphF6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 5,1");
$sqlGraphF7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 6,1");
$sqlGraphF8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 7,1");
$sqlGraphF9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 8,1");
$sqlGraphF10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_f ORDER BY id DESC LIMIT 9,1");

$sqlGraphG1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 0,1");
$sqlGraphG2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 1,1");
$sqlGraphG3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 2,1");
$sqlGraphG4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 3,1");
$sqlGraphG5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 4,1");
$sqlGraphG6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 5,1");
$sqlGraphG7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 6,1");
$sqlGraphG8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 7,1");
$sqlGraphG9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 8,1");
$sqlGraphG10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_g ORDER BY id DESC LIMIT 9,1");

$sqlGraphH1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 0,1");
$sqlGraphH2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 1,1");
$sqlGraphH3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 2,1");
$sqlGraphH4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 3,1");
$sqlGraphH5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 4,1");
$sqlGraphH6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 5,1");
$sqlGraphH7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 6,1");
$sqlGraphH8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 7,1");
$sqlGraphH9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 8,1");
$sqlGraphH10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_h ORDER BY id DESC LIMIT 9,1");

$sqlGraphI1 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 0,1");
$sqlGraphI2 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 1,1");
$sqlGraphI3 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 2,1");
$sqlGraphI4 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 3,1");
$sqlGraphI5 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 4,1");
$sqlGraphI6 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 5,1");
$sqlGraphI7 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 6,1");
$sqlGraphI8 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 7,1");
$sqlGraphI9 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 8,1");
$sqlGraphI10 = mysqli_query($connection, "SELECT id, nilai_sensor FROM data_sensor_i ORDER BY id DESC LIMIT 9,1");

if ($row = mysqli_fetch_assoc($sqlGraphA1)) {
    $dataAGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA2)) {
    $dataAGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA3)) {
    $dataAGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA4)) {
    $dataAGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA5)) {
    $dataAGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA6)) {
    $dataAGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA7)) {
    $dataAGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA8)) {
    $dataAGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA9)) {
    $dataAGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphA10)) {
    $dataAGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphB1)) {
    $dataBGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB2)) {
    $dataBGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB3)) {
    $dataBGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB4)) {
    $dataBGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB5)) {
    $dataBGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB6)) {
    $dataBGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB7)) {
    $dataBGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB8)) {
    $dataBGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB9)) {
    $dataBGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphB10)) {
    $dataBGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphC1)) {
    $dataCGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC2)) {
    $dataCGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC3)) {
    $dataCGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC4)) {
    $dataCGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC5)) {
    $dataCGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC6)) {
    $dataCGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC7)) {
    $dataCGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC8)) {
    $dataCGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC9)) {
    $dataCGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphC10)) {
    $dataCGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphD1)) {
    $dataDGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD2)) {
    $dataDGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD3)) {
    $dataDGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD4)) {
    $dataDGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD5)) {
    $dataDGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD6)) {
    $dataDGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD7)) {
    $dataDGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD8)) {
    $dataDGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD9)) {
    $dataDGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphD10)) {
    $dataDGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphE1)) {
    $dataEGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE2)) {
    $dataEGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE3)) {
    $dataEGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE4)) {
    $dataEGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE5)) {
    $dataEGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE6)) {
    $dataEGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE7)) {
    $dataEGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE8)) {
    $dataEGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE9)) {
    $dataEGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphE10)) {
    $dataEGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphF1)) {
    $dataFGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF2)) {
    $dataFGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF3)) {
    $dataFGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF4)) {
    $dataFGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF5)) {
    $dataFGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF6)) {
    $dataFGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF7)) {
    $dataFGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF8)) {
    $dataFGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF9)) {
    $dataFGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphF10)) {
    $dataFGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphG1)) {
    $dataGGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG2)) {
    $dataGGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG3)) {
    $dataGGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG4)) {
    $dataGGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG5)) {
    $dataGGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG6)) {
    $dataGGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG7)) {
    $dataGGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG8)) {
    $dataGGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG9)) {
    $dataGGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphG10)) {
    $dataGGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphH1)) {
    $dataHGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH2)) {
    $dataHGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH3)) {
    $dataHGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH4)) {
    $dataHGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH5)) {
    $dataHGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH6)) {
    $dataHGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH7)) {
    $dataHGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH8)) {
    $dataHGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH9)) {
    $dataHGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphH10)) {
    $dataHGraph10 = $row['nilai_sensor'];
}

if ($row = mysqli_fetch_assoc($sqlGraphI1)) {
    $dataIGraph1 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI2)) {
    $dataIGraph2 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI3)) {
    $dataIGraph3 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI4)) {
    $dataIGraph4 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI5)) {
    $dataIGraph5 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI6)) {
    $dataIGraph6 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI7)) {
    $dataIGraph7 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI8)) {
    $dataIGraph8 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI9)) {
    $dataIGraph9 = $row['nilai_sensor'];
}
if ($row = mysqli_fetch_assoc($sqlGraphI10)) {
    $dataIGraph10 = $row['nilai_sensor'];
}
//$dataFull = '['.$dataAGraph1.','.$dataAGraph2.','.$dataAGraph3.','.$dataAGraph4.','.$dataAGraph5.','.$dataAGraph6.','.$dataAGraph7.','.$dataAGraph8.','.$dataAGraph9.','.$dataAGraph10.']';
echo json_encode(array(
    "A1" => $dataAGraph1, "A2" => $dataAGraph2,
    "A3" => $dataAGraph3, "A4" => $dataAGraph4, "A5" => $dataAGraph5,
    "A6" => $dataAGraph6, "A7" => $dataAGraph7, "A8" => $dataAGraph8,
    "A9" => $dataAGraph9, "A10" => $dataAGraph10,
    "B1" => $dataBGraph1, "B2" => $dataBGraph2,
    "B3" => $dataBGraph3, "B4" => $dataBGraph4, "B5" => $dataBGraph5,
    "B6" => $dataBGraph6, "B7" => $dataBGraph7, "B8" => $dataBGraph8,
    "B9" => $dataBGraph9, "B10" => $dataBGraph10,
    "C1" => $dataCGraph1, "C2" => $dataCGraph2,
    "C3" => $dataCGraph3, "C4" => $dataCGraph4, "C5" => $dataCGraph5,
    "C6" => $dataCGraph6, "C7" => $dataCGraph7, "C8" => $dataCGraph8,
    "C9" => $dataCGraph9, "C10" => $dataCGraph10,
    "D1" => $dataDGraph1, "D2" => $dataDGraph2,
    "D3" => $dataDGraph3, "D4" => $dataDGraph4, "D5" => $dataDGraph5,
    "D6" => $dataDGraph6, "D7" => $dataDGraph7, "D8" => $dataDGraph8,
    "D9" => $dataDGraph9, "D10" => $dataDGraph10,
    "E1" => $dataEGraph1, "E2" => $dataEGraph2,
    "E3" => $dataEGraph3, "E4" => $dataEGraph4, "E5" => $dataEGraph5,
    "E6" => $dataEGraph6, "E7" => $dataEGraph7, "E8" => $dataEGraph8,
    "E9" => $dataEGraph9, "E10" => $dataEGraph10,
    "F1" => $dataFGraph1, "F2" => $dataFGraph2,
    "F3" => $dataFGraph3, "F4" => $dataFGraph4, "F5" => $dataFGraph5,
    "F6" => $dataFGraph6, "F7" => $dataFGraph7, "F8" => $dataFGraph8,
    "F9" => $dataFGraph9, "F10" => $dataFGraph10,
    "G1" => $dataGGraph1, "G2" => $dataGGraph2,
    "G3" => $dataGGraph3, "G4" => $dataGGraph4, "G5" => $dataGGraph5,
    "G6" => $dataGGraph6, "G7" => $dataGGraph7, "G8" => $dataGGraph8,
    "G9" => $dataGGraph9, "G10" => $dataGGraph10,
    "H1" => $dataHGraph1, "H2" => $dataHGraph2,
    "H3" => $dataHGraph3, "H4" => $dataHGraph4, "H5" => $dataHGraph5,
    "H6" => $dataHGraph6, "H7" => $dataHGraph7, "H8" => $dataHGraph8,
    "H9" => $dataHGraph9, "H10" => $dataHGraph10,
    "I1" => $dataIGraph1, "I2" => $dataIGraph2,
    "I3" => $dataIGraph3, "I4" => $dataIGraph4, "I5" => $dataIGraph5,
    "I6" => $dataIGraph6, "I7" => $dataIGraph7, "I8" => $dataIGraph8,
    "I9" => $dataIGraph9, "I10" => $dataIGraph10
));
//echo json_encode($dataFull);