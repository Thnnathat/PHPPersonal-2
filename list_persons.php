<!DOCTYPE html>
<html>
<body>
    <?php
    require ("./connect_db.php");

    $sql = "SELECT id, f_name, l_name, age, sex, married_status FROM survey";
    $result = $conn->query($sql);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $f_name = $row["f_name"];
            $l_name = $row["l_name"];
            $age = $row["age"];
            $gender = $row["sex"];
            $married = $row["married_status"];
            $prefix = "";

            if ($gender == "m") {
                if ($age >= 15) {
                    $prefix = "นาย";
                } else {
                    $prefix = "เด็กชาย";
                }
            } else {
                if ($married == "m") {
                    $prefix = "นาง";
                } else {
                    if ($age < 15) {
                        $prefix = "เด็กหญิง";
                    } else {
                        $prefix = "นางสาว";
                    }
                }
            }
            echo "Name: " . $prefix . " " . $f_name." ".$l_name. "<br>";    
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</body>

</html>