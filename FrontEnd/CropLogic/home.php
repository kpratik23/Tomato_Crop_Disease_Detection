<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="static/script.js" async></script>
        <title>Home Page</title>
    </head>
    <body>

    <div class="navbar">
        <a href="index.php">
            <img src="assets/logo.png" height="60" class="logo"/>
        </a>
        <button class="logout"><a href="logout.php">Logout</a></button>
    </div>
    
    <div class="dropdown">
        <ul class="ul-hidden">
            <li class="navbar-hidden">
                <img src="assets/logo.png" height="60" class="logo"/>
                <i class="fa fa-bars"></i>
            </li>
            <li class="hidden-btn">
                <button class="logout logout-hidden" id="logout-hidden"><a href="logout.php"><span class="logout-span">Logout</span></a></button>
            </li>
        </ul>
    </div>

    <div class="contents">
        <input type="file" id="myfile" name="myfile" hidden>
        <input type="file" id="cache" name="cache" hidden>
        <div class="block1">
            <div class="header1">IMAGE</div>
            <div class="image">
                <img src="assets/croppped.jpg" alt="" class="myimage" style="width:100%;height: 100%;">
            </div>
            <div class="btn1">
                <button class="clear">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    RESET
                </button>
                <button class="upload">
                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                    UPLOAD
                </button>
            </div>
        </div>
        <div class="block2">
            <div class="header2">OUTPUT</div>
            <div class="prediction">Prediction</div>
            <div class="classes">
                <ul>
                    <li id="list1">
                        <span id="Bacterial_spot">Bacterial_spot</span>
                        <div id="value1">0%</div>
                    </li>
                    <li id="list2">
                        <span id="Early_blight">Early_blight</span>
                        <div id="value2">0%</div>
                    </li>
                    <li id="list3">
                        <span id="healthy">healthy</span>
                        <div id="value3">0%</div>
                    </li>
                    <li id="list4">
                        <span id="Late_blight">Late_blight</span>
                        <div id="value4">0%</div>
                    </li>
                    <li id="list5">
                        <span id="Leaf_Mold">Leaf_Mold</span>
                        <div id="value5">0%</div>
                    </li>
                    <li id="list6">
                        <span id="Septoria_leaf_spot">Septoria_leaf_spot</span>
                        <div id="value6">0%</div>
                    </li>
                    <li id="list7">
                        <span id="Two_spotted_spider_mite">Two_spotted_spider_mite</span>
                        <div id="value7">0%</div>
                    </li>
                    <li id="list8">
                        <span id="Target_Spot">Target_Spot</span>
                        <div id="value8">0%</div>
                    </li>
                    <li id="list9">
                        <span id="Tomato_mosaic_virus">Tomato_mosaic_virus</span>
                        <div id="value9">0%</div>
                    </li>
                    <li id="list10">
                        <span id="Tomato_Yellow_Leaf_Curl_Virus">Tomato_Yellow_Leaf_Curl_Virus</span>
                        <div id="value10">0%</div>
                    </li>
                </ul>
            </div>
            <div class="btn2">
                <button class="predict">PREDICT</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="details" >View More Details</button>
            </div>
        </div>
    </div>

</body>
</html>