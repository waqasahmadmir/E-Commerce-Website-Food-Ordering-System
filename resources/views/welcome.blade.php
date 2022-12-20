<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozzi</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
    <style>
        .maintxt {
            width: 100%;
            height: 500px;
            font-size: 25px;
            background-image: url(https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80 );

        }
    </style>
</head>

<body>


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
  <div class="jumbotron-fluid">
    <h1 style="color: red; height:50px; text-align:center; font-size:35px">Well Come To Rozzi</h1>      
    
  </div>     
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-centered">
                <div class="maintxt" >
                   
                   
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container-fluid">
        <h1 style="text-align: center;">Our Services</h1>
    </div>


    <div class="row" >
  <div class="column">
    <div class="card">
      <img src="https://www.revieyou.com/wp-content/uploads/2020/10/Food-Ordering-Apps-in-Pakistan.jpg" alt="Jane" style="width:100%; height:100%+300px" >
      <div class="container">
        <h2>Food Ordering</h2>
            

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://peerbits-wpengine.netdna-ssl.com/wp-content/uploads/2018/07/food-ordering-system.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Food Delivery</h2>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YnVyZ2VyfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="" style="width:100%">
      <div class="container">
        <h2>Food Catering</h2>      
      </div>
    </div>
  </div>

  
</div>

<br><br>

  
<br><br>
<h2 style="text-align:center">Our Foods</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://image.shutterstock.com/image-photo/supreme-pizza-lifted-slice-1-260nw-84904912.jpg" alt="Jane" style="width:100%; " >
      <div class="container">
        <h2>Pizza</h2>
            <p>Chicago Pizza.</p>
            <p>Sicilian Pizza.</p>
            <p>Greek Pizza.</p>
           
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://media.istockphoto.com/photos/burrito-and-shawarma-wraps-with-beef-and-pork-vegetables-on-wooden-picture-id1079279000?k=20&m=1079279000&s=612x612&w=0&h=3r70as8Ksz_8hiJZ55XMgxYrhaq2F0PeJM_yIPjvlnI=" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Shawarma</h2>
        <p>Arabic Shawarma</p>
        <p>Chicken Shawarma</p>
        <p>Chicken Cheeze Shawarma</p>
        <p>Zinger Shawarma</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YnVyZ2VyfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="" style="width:100%">
      <div class="container">
        <h2>Burgers</h2>
        <p>Shami Burger</p>
        <p>Zinger Burger</p>
        <p>Chicken Burger</p>
        <p>BBQ Burger</p>
      
      </div>
    </div>
  </div>

</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://cdn-images-fishry.azureedge.net/product/HotShots-500x360-9d125cc-kfc.png" alt="Jane" style="width:100%; " >
      <div class="container">
        <h2>Hot Shots</h2>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://shireenanwer.com/wp-content/uploads/2020/07/Paratha-Roll-Bake-Recipe.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Rol Pratha</h2>
      
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://img.taste.com.au/z8t9Lqz3/taste/2016/11/best-ever-potato-chips-105022-1.jpeg" alt="" style="width:100%">
      <div class="container">
        <h2>Fris</h2>
        
      
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark" style="background-color: lightslategray;">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="">
          <h2 style="text-align: center;" >Get connected with us on social networks!</h2>
        </div>
        
        
      </div>
      
    </div>
  </div>


  <div class="container text-center text-md-left mt-5">

  
    <div class="row mt-3">

    
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

     
        <h3 class="text-uppercase font-weight-bold">Application name</h3>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
       
        <h4>ROZZI</h4>
        <p style="font-size: 14px;"> Here You can order food with delivery. You can also be facilitate with food catering</p>


      </div>
   
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <h3 class="text-uppercase font-weight-bold">Products</h3>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="font-size: 14px;">
        Fast Food
        </p>
        <p style="font-size: 14px;">
        Cold Drinks
        </p>
        <p style="font-size: 14px;">
        Meal
        </p>
       

      </div>
   
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <h3 class="text-uppercase font-weight-bold">Useful Links</h3>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a style="font-size: 14px;" href="#!">Facebook</a>
        </p>
        <p>
          <a style="font-size: 14px;" href="#!">Instagram</a>
        </p>
        <p>
          <a style="font-size: 14px;" href="#!">Twitter</a>
        </p>
        

      </div>
    
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <h3 class="text-uppercase font-weight-bold">Contact</h3>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="font-size: 14px;">
          <i  class="fas fa-home mr-3"></i> Islamabad sector I-8 </p>
        <p style="font-size: 14px;">
          <i class="fas fa-envelope mr-3"></i> waqasviki397@gmail.com</p>
        <p style="font-size: 14px;">
          <i class="fas fa-phone mr-3"></i> +923408866468</p>
        

      </div>
   
    </div>
   

  </div>
 
  <div class="footer-copyright text-center py-3" style="font-size: 14px;"> © 2022 Copyright:
    <a style="font-size: 14px;" href=""> Rozzi.com</a>
  </div>
 

</footer>

</body>

</html>