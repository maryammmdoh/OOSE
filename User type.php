<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>User Type</title>
</head>
<body>
    <h3>Users Types</h3>
    <table border = 2>
        <tr>
            <td>ID</td>
            <td>User type</td>
        </tr>
        <?php
            include_once "Function.php";
            $objfile = new FileManager();
            $objfile -> $filename="Users type.txt";
            $objfile ->$Separator="~";
            $objfile ->Drawtablefromfile("Users type.txt");
        ?>
    </table>
</body>
</html>