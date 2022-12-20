<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Food Ordering System</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body style="background-color: rgb(163, 147, 127);">
  
<div class="container">
  <div class="jumbotron" style="margin-top:50px;height:550px;">
    
  
<div class="container" >
  <form   action="{{url('/userloginvalidation')}}" method="POST" style="margin-top: 135px ; margin-left:300px">
@csrf
  <div class="form-group">
    <label for="name" >Username</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Username" required  style="width: 400px;">
  </div>

  <br>
  <div class="form-group">
    <label for="password" >Password</label>
    <input type="password" class="form-control" name="password"  id="password" placeholder="Password" required style="width: 400px;">

  </div>
 
  <br>
  <button type="submit" class="btn btn-primary" style="width: 150px;">login</button>
</form>
  </div>
       
</div>

</div>
</body>
</html>