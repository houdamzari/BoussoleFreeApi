<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>

        <td>First Name :{{ $user[0]->firstname }}</td>
        <td>Last Name :{{ $user[0]->lastname }}</td>
        </tr>
        </table>
</body>
</html>
