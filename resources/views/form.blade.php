<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <li>Make sure to add a full uppercase last name, and a first name that starts with a capital letter</li>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if(session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
  @endif
<br><br>
  <div class="container">
    <img style="margin-left:160px;width:150px;"src="./logo.png" alt="cc">

    <div class="row justify-content-center mt-4">
    <div class="col-lg-8 mx-auto mbr-form" >
        <form name="form" id="form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label>firstname :</label>
          <input type="text" id="firstname" name="firstname" class="form-control" required="">
        </div>

        <div class="form-group">
          <label>lastname :</label>
          <input name="lastname" class="form-control" required=""></input>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
