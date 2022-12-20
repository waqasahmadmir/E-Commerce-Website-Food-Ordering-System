
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Food Ordering</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- <script>
 $(document).ready(function () {
   $(".multRow input").keyup(multInputs);

   function multInputs() {
       var mult = 0;
       // for each row:
       $("tr.multRow").each(function () {
           // check value entered for Percentage Grade 
           // & change Pass Level to value accordingly
           var $total= 0;
           var $val1 = $('.price', this).val();
           var $val3 = $('.quantity', this).val(); 
           var $val2 = $('.passLevel', this).val();
           var $total = ($val1 * $val2) 
           $('.multTotal',this).text($total);
           mult = $total;
       });
       $("#totalprice").text(mult);
   }
  });
  </script> -->
  <script language="javascript" type="text/javascript">
  function getVal(){
  var n1=document.getElementById('input1').value;
  var n2=document.getElementById('price').value
  var n3=n1*n2;
  
    document.getElementById('input2').value = n3;
  }
</script>
<body style="background-color: rgb(163, 147, 127);">


   
@include('layouts.usernav')
  <div class="container">
  <form action="{{url('/final_order')}}" method="POST" style="margin-top: 2px ; margin-left:300px">
  @csrf
  <div class="form-group">
    <label for="name">Customer Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$user->uname}}" required style="width: 400px;" readonly>
  </div>

  <div class="form-group">
    <label for="contact">Customer Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="emailHelp" value="{{$user->contact}}" style="width: 400px;" required readonly>
  

</div>
  <div class="form-group">
    <label for="address">Customer Address</label>
    <input type="text" class="form-control" name="address" id="address" name="address" value="{{$user->address}}" style="width: 400px;" required readonly>
  </div>

  <div class="form-group">
    <label for="address">Item Name</label>
    <input type="text" class="form-control" name="iname" id="itemname" value="{{$item->item_name}}" style="width: 400px;" required readonly>
  </div>
  <div class="form-group">
    <label for="address">Per Item Price</label>
    <input type="text" class="form-control" name="price" id="price" value="{{$item->price}}" style="width: 400px;" required readonly>
  </div>

  <div class="form-group">
    <label for="address">Quantity</label>
    <input type="number" class="form-control" name="quantity"id="input1" onkeyup="getVal()" onclick="getVal()"  placeholder="Enter Quantity" min="1" style="width: 400px;" required >
  </div>

  <div class="form-group">
  <label for="address">GrandTotal</label>
<input type="text" id="input2" name="total" value="" class="form-control" style="width: 400px;" required readonly/>
  </div>

  <!-- <div class="form-group">
    <label for="address">Total Price</label>
    <input type="number" class="form-control" name="totalprice" id="totalprice"  min="1" style="width: 400px;" required readonly  class="multTotal">
  </div> -->

  
  <button type="submit" class="btn btn-primary" style="width: 150px;">Confrim</button>
</form>
  </div>
       
</body>
</html>