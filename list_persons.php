<!DOCTYPE html>
<html>

<body>
    <?php

    $servername = "localhost";
    $username = "cpe1561";
    $password = "123456789";
    $dbname = "cpe1561";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM sirway";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["f_name"] . " " . $row["l_name"] . "- Age: " . $row["age"] . " - Sex: " . $row["sex"] . " - Married Status: " . $row["married_status"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</body>

</html>