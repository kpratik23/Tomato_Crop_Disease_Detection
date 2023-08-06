<?php include 'config.php' ; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet">
    <title>CropLogic</title>
    <style>
        .nav-link{
            font-size:20px;
            font-family:cursive;
        }
        .navbar-brand{
             font-size:20px;
               font-family:cursive;
        }
         form{
           
            background-color:LemonChiffon;
            padding:30px;
            border-radius:10px;
        }
    </style>
</head>

<body >
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:paleGreen">
        <a class="navbar-brand" href="index.php">
      <img src="assets.logo.png" height="60" alt="MDB Logo"
        loading="lazy" />
    </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark"  style="font-family: 'Coda', cursive;" href="index.php" >Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" style="font-family: 'Coda', cursive;" href="index.php#about">About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" style="font-family: 'Coda', cursive;" href="index.php#contact">Contact US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" style="font-family: 'Coda', cursive;" href="login.php">Login</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </nav>
        <!-- <div class="row" style="margin-top:58px; ">
            <div class="col-md-12 " style="background-color:coral ;height:300px">

                <h1 class="text-center pt-5 text-light font-weight-bold">Welcome To PlantAgro</h1><br>
                <p class="text-center text-light">A functional Bootstrap 5 boilerplate for one page scrolling websites
                </p>

            </div>
        </div> -->
        <!-- about us  section -->
       
         
        <div class="row" style="height:90vh;margin-top:30px;background-color:PeachPuff;" >

            <div class="col-md-6 m-auto"   >
               
                
                <form action="" method="POST">
                     <h2 style="text-align:center;font-family: 'Coda', cursive;">Register Here!</h2>
            <hr>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label ">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
            </div>

            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label ">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputNumber" name="phone_no" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label ">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary " name="register">Submit</button>
          
                <p >Already Registered? <a href="login.php" style="text-decoration:none;font-weight:bold;">Login</a></p>
            </div>
        </form>
               
            </div>
        </div>




        <div class="row mt-1 mb-1" >
            <footer class="col-md-12" style="background-color:palegreen;height:50px">
        
            <p class="m-0 text-center font-weight-bold mt-3">Copyright &copy; Your Website 2023</p>
           
          </footer>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>