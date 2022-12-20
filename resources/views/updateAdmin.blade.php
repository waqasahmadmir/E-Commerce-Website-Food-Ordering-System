<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Food Ordering</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body style="background-color: rgb(163, 147, 127);">


<div class="container">
  <div class="jumbotron" style="margin-top:25px;height:600px;">
   
  <div class="container">

<form action="{{url('/updating_admin',$admin->id)}}" method="POST" style="margin-top: 20px ; margin-left:300px">
 @csrf
<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$admin->name}}" required style="width: 400px;">
</div>


<div class="form-group">
  <label for="email">Email address</label>
  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$admin->email}}" style="width: 400px;" required>
</div>
<div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="form-control" name="password" value="{{$admin->password}}" style="width: 400px;" required>
</div>



<button type="submit" class="btn btn-primary" style="width: 150px;">Update</button>
</form>

  </div>
       
</div>

</body>
</html>