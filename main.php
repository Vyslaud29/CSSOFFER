<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSOFFER</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <header>
        <h1>
            CSOFFER
        </h1>
    </header>

    <div id="lewo">
    <h1>Ostatnie losowania: </h1>

    <?php 
    // if (isset($_POST['upload'])){
    //     $target = "zdjecia/KatoChallengers".basename($_FILES['image']['name']);
        $db = mysqli_connect('localhost', 'root', '', 'csoffer');
        // $image = $_FILES['image']['name'];
        // $sql = "SELECT `ibuypowerHolo` FROM `skrzynia2`", ('$image');
        // mysqli_query($db, $sql);
        $table = 'skrzynia1';
    // }
    
    
    ?>
    <!-- <form method="post" action="main.php">
        <input type="hidden" name="img1">
        <div>
            <input type="file" name="image">
        </div>
        <div>
            <input type="submit" name="upload" value="upload img">
        </div>


    </form> -->
    </div>


    <div id="srodek">
        
    </div>


    <div id="prawologowanie">
        <h3><a href="logowanie.html">Zaloguj się</a></h3>
        <h3><a href="rejestracja.html">Zarejetruj się</a></h3>
    </div>
</body>
</html>