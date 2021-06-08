<html style="padding: 0;">
    <head>
        <meta charset="UTF-8">
        <title>FreeAir</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styleheader.css">
        <link rel="icon" type="image/png" href="./img/airlogofavicon.png">
    </head>
    <body style="padding: 0px;">
        <nav class="navbar navbar-expand-lg navbar-light px-4">
            <div class="container-fluid">
                
                    <a class="navbar-brand col py-4" href="index.php"><img src="img/airlogo.png" alt="" width="200vh"></a>
                    
                    <h2 class="text-center col">FreeAir.com</h2>
                    <ul class="navbar-nav nav justify-content-end col">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Buy.php">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="About.php" tabindex="-1" aria-disabled="true">About</a>
                        </li>
                    </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="col-centered  text-light" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(img/avenue-815297_1920.jpg);background-size: cover;">
                <div style="padding: 10%;" >
                    <div class="row">
                    <div class="col-8">
                        <p class="display-5">Everyone can breathe</p> <p class="h5"> All the air that you need</p>
                    </div>
                        
                     <a href="Buy.php" class="col btn my-2 mx-5 buttonbox" style="color: rgb(44, 44, 44);background-color: rgb(165, 230, 230);"><br><h3 style="padding-bottom: 20px;">Get free air</h3></a>
                
                </div>
            </div>
        </div>
        <div class="container px-5 py-4">
            <div class="row py-3">
                <div class="col"><h2>Who we are</h2></div>
                <div class="col">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas sollicitudin. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Curabitur bibendum justo non orci. Maecenas aliquet accumsan leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla non arcu lacinia neque faucibus fringilla. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Praesent in mauris eu tortor porttitor accumsan. Etiam commodo dui eget wisi. Mauris metus. </div>
            </div>
            <div class="row py-5">
                <img src="img/family-2811003_1920.jpg" alt="" class="col">
                <H1 class="col">we are the best</H1>
            </div>
            <div class="row py-4">
                <div class="col">
                    <h2>Dotazník</h2>
                    <form action="" class="py-3" method="POST">
                        <input type="text" placeholder="jméno" name="jmeno" class="my-1"><br>
                        <input type="text" placeholder="email" name="email" class="my-1"><br>
                        <textarea type="text" placeholder="zpráva" name="zprava" class="my-1"></textarea><br>
                        <input type="submit" value="Submit" name="submitdotaznik">
                    </form>

                </div>
                <div class="col">
                    <h2>Hodnocení</h2>
                    <form action="" method="post">
                        <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                            <input type="submit" name="hodnocenisubmit">
                    </form>
                    <p>avg rating</p>
                    <?php include "php/hodnoceniavg.php" ?>
                </div>
            </div>
            
        </div>
                    <?php include "php/indexform.php";?>

        <footer class="bg-light text-center text-dark">
           <!-- insert social media -->
          
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: var(--backgroundlite)">
              © 2021 Copyright:
              Matew Bosak
            </div>
            <!-- Copyright -->
          </footer>
    </body>
</html>