<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>
<body>
     @include('layouts.usernav')

<div class="row" >
<div style="background-color: grey; height:60px">
<h1 style="color: red; text-align:center; margin-top: 20px;">WellCome To ROZZI</h1>
</div>

</div>

<br><br>
<h2 style="text-align:center">Our Foods</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://static.toiimg.com/photo/76481989.cms" alt="Jane" style="width:100%; " >
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
        <h2>Fries</h2>
        
      
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfHio9tFXP4zNXgmHMZUCFY811gMH3o24C9A&usqp=CAU" alt="Jane" style="width:100%; " >
      <div class="container">
        <h2>Sandwich</h2>
         
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://media.istockphoto.com/photos/fruit-juice-picture-id155376375?k=20&m=155376375&s=612x612&w=0&h=xvxdLKu8FQHp0zxAyxD26Nq8MLLsWee7oN7cqJy9KT0=" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Juices</h2>
       
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://image.shutterstock.com/image-photo/poznan-poland-may-19-2017-260nw-648584629.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Cold Drinks</h2>
      
      </div>
    </div>
  </div>

</div>


</body>
</html>
