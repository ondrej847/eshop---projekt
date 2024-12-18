
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
</head>
<body>
<?php
require_once "header.php";
?>

<?php
require_once "footer.php";
?>


<form method="POST">
    <label for="email">Jméno:</label>  <!-- doplnit bud email, nebo username - kdyztak opravit v mysql -->
    <input required id="user_id" name="username" type="text"/>    <!-- doplnit -->
<br/>
    <label for="passwd">Heslo:</label>
    <input required id="id_password" name="password" type="password"/>  <!--doplnit -->
<br/>
    <input type="submit" value="Přihlásit"/>

</form>
<a href="register.php">
<button>Registrace</button>
</a>

        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;   /* aby to bylo uprostred */        
            align-items: center;      /* primo na prostredku */           
            height: 90vh;          
        }
              
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;    
            border-radius: 4px;
            font-size: 14px;
        }
  
   
        input[type="submit"], button {
            width: 100%;
            padding: 10px;
            background-color:rgb(136, 160, 141);
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 15px;


        }


    </style>
</body>
</html>


