<?php include 'config.php' ; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        .main{
            background-image:url(assets/banner.jpg);
            background-size:cover;
        }
        .main2{
                position:absolute;
                top:200px;
                margin-left:0px;
                text-align:center;
                font-family: 'Coda', cursive;
                /* background-color:palegreen; */
                padding-bottom:10px;
                color:white;
                /* opacity: 0.8; */
               
        }
    </style>
</head>

<body >
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:paleGreen">
        <a class="navbar-brand" href="index.php">
      <img src="assets/logo.png" height="60" alt="MDB Logo"
        loading="lazy" />
    </a>    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark"  style="font-family: 'Coda', cursive;" href="#" >Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" style="font-family: 'Coda', cursive;" href="#about">About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" style="font-family: 'Coda', cursive;" href="#contact">Contact US</a>
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
       
        <div class="row" style="margin-top:65px;" >
            <div class="col-md-12 main" style="background-color:coral ;height:625px ">
            <br>  
                <div class="col-md-5 main2 m-auto">
                        <h1 class=" pt-5   font-weight-bold" >Welcome To CropLogic</h1><br>
                    <p>Heart of Perfect Farming</p>
                </div>
            </div>
    
        </div>
        <!-- about us  section -->
        <section id="about">
            <div class="row p-3 mt-1"  style="background-color:PeachPuff">
            <div class="col-md-12 pb-3 mt-5" >
                <h2 class="text-center font-bold" style="font-size:40px; font-family: 'Coda', cursive;">About Us</h2>
            </div>
            <p style="font-size: 18px;font-weight: 400;">Tomato crop disease is a major problem for farmers around the world. It can cause significant losses in crop yield and quality. Traditional methods of disease detection, such as visual inspection, can be time-consuming and inaccurate. Our website uses deep learning to detect tomato crop disease. Deep learning is a type of artificial intelligence that can learn to identify patterns in data. We have trained our deep learning model on a large dataset of images of healthy and diseased tomato plants. This allows our model to accurately identify the different types of tomato crop diseases. Our website is a valuable tool for farmers. It can help them to quickly and accurately identify tomato crop diseases. This allows them to take action to prevent the spread of disease and protect their crops.</p>            
        </div>
        </section>

            <!-- contact us -->
        <div class="row mt-1" id="contact" style="background-color:LemonChiffon;">
            <div class="col-md-12 pb-3 mt-5">
                <h2 class="text-center font-bold" style="font-size:40px; font-family: 'Coda', cursive;">Contact Us</h2>
            </div>
            <div class="col-md-12">
                <form id="contact" method="POST">
                    <!-- Name input -->
                    <div class="mb-3 ">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" placeholder="Name" />
                    </div>

                    <!-- Email address input -->
                    <div class="mb-3">
                        <label class="form-label" for="emailAddress">Mobile Number</label>
                        <input class="form-control" id="mobilenumber" type="number" name="phone_no"
                            placeholder="Enter your mobile number" />
                    </div>

                    <!-- Message input -->
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" type="text" name="message" placeholder="Message"
                            style="height: 5rem; resize:none;"></textarea>
                    </div>

                    <!-- Form submit button -->
                    <div class="d-grid pb-2 text-center ">
                        <button class="btn btn-primary btn-lg"  type="submit" name="contact">Submit</button>
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