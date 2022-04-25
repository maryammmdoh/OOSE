<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
</head>
<body>
    <h1>List all users</h1>
    <table border = 2>
        <tr>
            <td>Id</td>
            <td>First name</td>
            <td>Second name</td>
            <td>Email</td>
            <td>User ID</td>
            <td>Phone number</td>
            <td>User type</td>
        </tr>
        <?php
            include_once "Function.php";
            $objfileuser = new user;
            $objfileuser->$FileManagerobj->Drawtablefromfile();
        ?>
        <tr>
            <td>
                <a href ="Add user.html">Add User<a>
            </td>
    </tr>
    </table>
</body>
</html>