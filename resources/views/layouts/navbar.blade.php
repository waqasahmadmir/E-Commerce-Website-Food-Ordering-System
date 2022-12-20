

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="https://i.pinimg.com/736x/c2/c5/fa/c2c5fa686e5dba4ab202fe08431946b3.jpg"></a> -->
    <img src="https://i.pinimg.com/736x/c2/c5/fa/c2c5fa686e5dba4ab202fe08431946b3.jpg" alt="" style="height: 35px ;">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="text-align: right;">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('adminHome')}}" style="font-size: 18px;">Home </a>
            </li>

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
                    Dashboard
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a style="font-size: 18px;" class="dropdown-item" href="{{url('addItems')}}">Add Item</a>
                    
                    <a style="font-size: 18px;" class="dropdown-item" href="{{url('displayitems')}}">View Items</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('view_orders')}}" style="font-size: 18px;">Orders</a>
            
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('displaycustomers')}}" style="font-size: 18px;">Customers</a>
            </li>

            <li class="nav-item">
              
            <a  class="nav-link" style="font-size: 18px;"  href="{{url('displaycontacts')}}" style="font-size: 18px;"> Contacts</a>
           
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="{{url('/displayAdmin')}}" style="font-size: 18px;"> About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('adminfront')}}" style="font-size: 18px;">Logout</a>
            </li>
        </ul>
    </div>
</nav>