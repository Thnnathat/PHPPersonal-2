<!DOCTYPE html>
<html>

<body>
    <form action="show.php"  method="post" target=_blank>
        Your name: <input type="text" name="name"><br>
        Your age: <input type="text" name="age"><br>
        Your gender: <input type="radio" name="gender" id="">Male<input type="radio" name="gender" id="">Female<br>
        Your married status: <input type="radio" name="married" id="">Married<input type="radio" name="married" id="">Unmarried
        <br><input type="submit" value="submit">
    </form>
    <a href = "./list_persons.php" target=_blank>Database</a>
    <a href = "./show_people.php" target=_blank>Show People</a>
    <a href = "./edit_people.php" target=_blank>Edit People</a>

</body>

</html>