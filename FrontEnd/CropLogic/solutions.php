<?php include 'config.php' ; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Document</title>
        <script src="static/solution.js" async></script>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:paleGreen">
            <div id="google_translate_element"></div>
            <a class="navbar-brand" href="index.php">
          <img src="20230221_080658.png" height="60" alt="MDB Logo"
            loading="lazy" />
        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger" style="padding:15px 0px;width: 150px; border-radius: 10px; color:white;font-size: 20px;" href="logout.php">Logout </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
    <div class="row"  style="margin-top:86px; background-color:PeachPuff;min-height: 88vh;">
    <div class="col-md-5 m-auto">

    <ul class="list-group ">
        <li class="list-group-item" id="disease_name"></li>
        <li class="list-group-item" id="type_of_disease"></li>
        <li class="list-group-item" id="chemical_control"></li>
        <li class="list-group-item" id="organic_control"></li>
        <li class="list-group-item" id="also_found_in"></li>
        <li class="list-group-item" id="avoid_this"></li>
    </ul>
</div>
</div>


<!-- <div class="row mt-1 mb-1" >
    <footer class="col-md-12" style="background-color:palegreen;height:50px">

    <p class="m-0 text-center font-weight-bold mt-3">Copyright &copy; Your Website 2023</p>
   
  </footer>
</div> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</div>
</body>
</html>