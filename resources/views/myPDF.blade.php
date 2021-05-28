<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>

</head>
<style>
.container{
display: flex;
flex-direction: column;
align-content: center;
justify-content: center;}

h3{
font-family: Open sans;
font-size:30px;
}
</style>
<body>
<div class="container">
    <h1>Summary :</h1>
    <br>
    <br>
    <h3> <strong ><u> Prenom : </u></strong> {{ $firstname }} </h3>
    <h3> <strong ><u>  Nom : </u></strong> {{ $lastname }} </h3>
</div>


</body>
</html>
