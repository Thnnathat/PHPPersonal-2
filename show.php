<!DOCTYPE html>
<html>

<body>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $marries = $_POST["marries"];

    echo "Name: ".$name."<br>";
    echo "Age: ".$age."<br>";
    echo "Gender: ".$gender."<br>";
    echo "Married status: ".$married."<br>";

    if ($age > 15){
        echo "Old";
    }else{
        echo "";
    }
    ?>
</body>

</html>