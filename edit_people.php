<?php
require("./connect_db.php");

$id=$_GET["id"];
$sql = "SELECT * FROM survey WHERE id=$id";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
?>
<form action="./save_edit_people.php" method="post">
    <input type="hidden" name="id" value="<?php print($row["id"]); ?>">
    First Name:<input type="text" name="fname" value="<?php print($row["f_name"]); ?>"><br>
    Last Name:<input type="text" name="lname" value="<?php print($row["l_name"]); ?>"><br>
    Age:<input type="text" name="age" value="<?php print($row["age"]); ?>"><br>
    Sex:<select name="sex">
            <option value="m" <?php if($row["sex"]=="m") print("selected");?>>Male</option>
            <option value="w" <?php if($row["sex"]=="w") print("selected");?>>Female</option>
        </select><br>
    Marry Status:<select name="marry_status">
            <option value="u" <?php if($row["married_status"]=="u") print("selected");?>>Single</option>
            <option value="m" <?php if($row["married_status"]=="m") print("selected");?>>Married</option>
        </select><br>
    <input type="submit" value="edit">
</form>
<?php
}
?>