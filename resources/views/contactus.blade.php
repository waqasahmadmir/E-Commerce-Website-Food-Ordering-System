<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
@include('layouts.usernav')
<h2 style="color: red; height:25px; text-align:center; font-size:35px; margin-bottom:20px">Contact Us</h2>


<div class="container" style="width: 80%; margin-left:10%
 ">
<p style="text-align: center;">We offer full-service of food ordering and  catering for any event, large or small. We understand your needs and we will cater </p>
    <p style="text-align: center;">the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us. We are Here to take Your Order.</p>

  <form action="{{url('/addcontacts')}}" method="POST" style="width: 550px; margin-left:25%">
  @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

    <label for="country">Address</label>
    <select id="country" name="address">
      <option value="I-8,Islamabad">I-8,Islamabad</option>
      <option value="G-6,Islamabad">G-6,Islamabad</option>
      <option value="F-12,Islamabad">F-12,Islamabad</option>
      <option value="Tramri">Tramri</option>
      <option value="AliPur">AliPur</option>
      <option value="Rawal Town">Rawal Town</option>
      <option value="Behria Town">Behria Town</option>
      <option value="F-5,Islamabad">F-5,Islamabad</option>
      <option value="F-8,Markaz Islamabad">F-8,Markaz Islamabad</option>
      <option value="E-11,Markaz Islamabad">E-11,Markaz Islamabad</option>
    </select>

    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:140px" required></textarea>

    <input type="submit" value="Send" style="width: 100px;">
  </form>
</div>

</body>
</html>
