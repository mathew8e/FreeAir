<html>
    <head>
        <title>admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            tr, td{
                border: solid black 2px;
                padding: 10px;
                text-align: center;
            }
            table{
                margin: auto;
            }
            h2{
                text-align:center;
            }
        </style>
    </head>
    <body>
            <nav>
               <a href="index.php">main site</a>
            
            </nav>
        <div class="container-fluid py-5">
            <h1 class="text-center">Admin page</h1>
        </div>
        <h2 class="py-4">položky</h2>

<?php include "php/adminphp.php"; ?>

        <div class="container">
            <form action="" method="post" id="admin" class="py-5">
                vyberte jakou polozku chcete odebrat podle id <select name="vybratid" id="vybratid" form="admin"> <?php nameList($conn, "SELECT id FROM nakup") ?> </select>
                <input type="submit" value="submit" name="delsubmit"> 
            </form>
        </div>
        <h2 class="py-4">dotazy</h2>
        <?php include "php/dotazview.php"; ?>
        
    </body>
</html>


