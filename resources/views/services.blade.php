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
<body style="background-color: rgb(219, 211, 201);">
@include('layouts.usernav')
<div class="row" style="margin-left: 15%;">
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

  
</div>

<br><br>
<div class="row" style="margin-left: 15%;">
<div class="column">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YnVyZ2VyfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="" style="width:100%">
      <div class="container">
        <h2>Food Catering</h2>      
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://media.istockphoto.com/photos/burrito-and-shawarma-wraps-with-beef-and-pork-vegetables-on-wooden-picture-id1079279000?k=20&m=1079279000&s=612x612&w=0&h=3r70as8Ksz_8hiJZ55XMgxYrhaq2F0PeJM_yIPjvlnI=" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Food Supply</h2>
        
      </div>
    </div>
  </div>
 
  
 
</div>

</body>
</html>
