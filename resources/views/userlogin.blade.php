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
  
<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- <a class="navbar-brand" href="https://i.pinimg.com/736x/c2/c5/fa/c2c5fa686e5dba4ab202fe08431946b3.jpg"></a> -->
           <!-- <img src="https://i.pinimg.com/736x/c2/c5/fa/c2c5fa686e5dba4ab202fe08431946b3.jpg" alt="" style="height: 35px ;"> -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a style="float: right;font-size: 18px;" class="nav-link" href="{{url('userlogin')}}"  >login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('userRegister')}}" style="font-size: 18px; float: right;" >Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<div class="container">
  <div class="jumbotron" style="margin-top:10px;height:550px;">
  
  
<div class="container" >
  <form   action="{{url('/loginvalidate')}}" method="POST" style="margin-top: 135px ; margin-left:300px">
  @csrf
  <div class="form-group">
    <label for="name" >Email Address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Username" required  style="width: 400px;">
  </div>

  <br>
  <div class="form-group">
    <label for="password" >Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required style="width: 400px;">

  </div>
  
  <br>
  <button type="submit" class="btn btn-primary"  style="width: 150px;">Login</button>
</form>
  </div>
       
</div>

</div>
</body>
</html>