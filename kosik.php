<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require_once "header.php";
?>




<?php
require_once "footer.php";
?>

<style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            background-color:rgb(255, 255, 255);
        }
        .container {
            width: 70%;
            margin: 50px auto;
            padding: 20px;
            background-color:rgb(248, 248, 248);   
        }
        h1 {
            text-align: center;
            color: #383737;
        }
        .kosik_tabulka {
            width: 100%;
            margin-top: 20px;    
            
        }
       
    </style>
<body>
<body>

    <div class="container">
        <h1>Košík</h1>
        <table class="kosik_tabulka">
            <thead>
                <tr>
                    <th>Produkt</th>
                    <th>Cena</th>
                    <th>Množství</th>
                    <th>Celkem</th>
                </tr>
            </thead>
        </table>


        <div class="total">
            <p>Celkem:</p>
        </div>

        <a href="pokladna.php">
        <button>Přejít k pokladně</button>
    </div>
    
</body>
</html>