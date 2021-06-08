<html>
    <head>
        <title>Buy free air</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styleheader.css">
        <link rel="icon" type="image/png" href="./img/airlogofavicon.png">
        <style>
            td {
                padding: 3px;
            }
        </style>
    </head>
    <body style="padding: 0px;">
        <nav class="navbar navbar-expand-lg navbar-light px-4">
            <div class="container-fluid">
                
                    <a class="navbar-brand col py-4" href="index.php"><img src="img/airlogo.png" alt="" width="200vh"></a>
                    
                    <h2 class="text-center col">FreeAir.com</h2>
                    <ul class="navbar-nav nav justify-content-end col">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
        <div class="mb-5 headerbox">
            <h2 class="display-2 p-5" style="text-align: center;">Buy some air</h2>
        </div>
        <div class="container py-3">
            <div class="row">
                <div class="col">
                    <img src="img/product.jpg" alt="product">
                </div>
                <div class="col">
                    <h1>Order some fresh free air</h1>
                    <form action="php/buyform.php" class="py-3" method="post" required>
                        <table>
                            <tr>
                                <td>Jmeno </td>
                                <td><input type="text" placeholder="Jmeno" name="jmeno"></td>
                            </tr>
                            <tr>
                                <td>Prijmeni </td>
                                <td><input type="text" placeholder="Prijmeni" name="prijmeni"></td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td><input type="text" placeholder="Email" name="email"></td>
                            </tr>
                            <tr>
                                <td>Adresa</td>
                                <td><input type="text" placeholder="Adresa" name="adresa"></td>
                            </tr>
                            <tr>
                                <td>Mnozstvi</td>
                                <td><input type="number" placeholder="Mnozstvi" name="mnozstvi"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="koupit zdarma" name="koupit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
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