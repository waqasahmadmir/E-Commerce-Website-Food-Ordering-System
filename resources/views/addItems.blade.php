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

<form action="{{url('/additems')}}" method="POST" style="margin-top: 20px ; margin-left:300px">
 @csrf
<div class="form-group">
  <label for="name">Item Name</label>
  <input type="text" class="form-control" name="iname" aria-describedby="emailHelp" placeholder="Enter Name" required style="width: 400px;">
</div>


<div class="form-group">
  <label for="ingarediant">Item Ingarediants</label>
  <input type="text" class="form-control" name="ingarediant" aria-describedby="emailHelp" placeholder="Enter Main Ingrediant" style="width: 400px;" required>
</div>
<div class="form-group">
  <label for="price">Item Price</label>
  <input type="number" class="form-control" name="price" placeholder="Price" style="width: 400px;" required>
</div>

<div class="form-group">
<input type="file" name="image"  class="form-control" style="width: 400px;" required>

</div>


<button type="submit"  class="btn btn-primary" style="width: 150px;" >Add Item</button>
<!-- <button type="submit" class="btn btn-primary" style="width: 150px;">Add</button> -->
</form>

  </div>
       
</div>

</body>
</html>