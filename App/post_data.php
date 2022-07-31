<?php
    date_default_timezone_set("Asia/Jakarta");

    if(isset($_GET["data"])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "project_monitoring-system";

        // Create MySQL connection fom PHP to MySQL server
        $connection = new mysqli($servername, $username, $password, $database_name);
        // Check connection
        if ($connection->connect_error) {
            die("MySQL connection failed: " . $connection->connect_error);
        }

        $datePass = date("d/m/Y");
        $timePass = date("H:i");
        $valuePass = $_GET['value'];

        if ($_GET['data'] == 'A'){
            $sql = "INSERT INTO data_sensor_a (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'B'){
            $sql = "INSERT INTO data_sensor_b (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'C'){
            $sql = "INSERT INTO data_sensor_c (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'D'){
            $sql = "INSERT INTO data_sensor_d (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'E'){
            $sql = "INSERT INTO data_sensor_e (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'F'){
            $sql = "INSERT INTO data_sensor_f (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'G'){
            $sql = "INSERT INTO data_sensor_g (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'H'){
            $sql = "INSERT INTO data_sensor_h (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }
        elseif ($_GET['data'] == 'I'){
            $sql = "INSERT INTO data_sensor_i (tanggal, jam, nilai_sensor) VALUES ('$datePass', '$timePass', '$valuePass')";
        }

        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . " => " . $connection->error;
        }

        $connection->close();
    } else {
        echo "temperature is not set in the HTTP request";
    }
?>