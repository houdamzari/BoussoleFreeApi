<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>

</head>
<body>
        <div style="display:flex;justify-content:flex-start;align-items:center;flex-direction:column;width:100%;"class="container">
            <img  style="width:150px;margin:50px  700px 70px 0;" src="./logo.png" alt="logo">
<br><br>
        <div class="card-header text-center">First Name</div> <div class="card-body text-center"> {{ $user[0]->firstname }}</div>
        <div class="card-header text-center">Last Name</div> <div class="card-body text-center">{{ $user[0]->lastname }}</div>
    </div>
</body>
</html>
