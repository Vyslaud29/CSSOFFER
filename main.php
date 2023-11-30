<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSSOFFER</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <header>
        <h1>
            CSSOFFER
        </h1>
    </header>




    <div id="srodek">
        

    <form method="post" action="">
    <button type="submit" name="otworz1" id="otworz">EMS Katowice 2014 Legends</button>
    <button type="submit" name="otworz2" id="otworz">EMS Katowice 2014 Challengers</button>
    <button type="submit" name="otworz3" id="otworz">Otwórz Skrzynię 3</button>
    <button type="submit" name="otworz4" id="otworz">Otwórz Skrzynię 4</button>
    <button type="submit" name="otworz5" id="otworz">Otwórz Skrzynię 5</button>
    <button type="submit" name="otworz6" id="otworz">Otwórz Skrzynię 6</button>
</form>

    <?php 
    // // if (isset($_POST['upload'])){
    // //     $target = "zdjecia/KatoChallengers".basename($_FILES['image']['name']);
         
    //     // $image = $_FILES['image']['name'];
    //     // $sql = "SELECT `ibuypowerHolo` FROM `skrzynia2`", ('$image');
    //     // mysqli_query($db, $sql);
    //     $wylosowanaLiczba = rand(1, 10);

    //     $query = "SELECT zdjecie FROM skrzynia1 WHERE id = $wylosowanaLiczba";
    //     $result = mysqli_query($db, $query);

    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();
    //         $sciezkaZdjecia = $row['zdjecie'];

            
    //         echo "<img src='$sciezkaZdjecia' alt='Zdjęcie z skrzyni'>";
    //     } else {
    //         echo "Nie udało się pobrać zdjęcia z bazy danych.";
    //     }

    //     $db->close();

    if (isset($_POST['otworz1'])) {
        otworzSkrzyne();
    }
    
    function otworzSkrzyne() {
       

    
    
        
        
        $wylosowanaLiczba = rand(1, 10);
        $db = mysqli_connect('localhost', 'root', '', 'cssoffer');
        $query = "SELECT zdjecie FROM skrzynia1 WHERE id = $wylosowanaLiczba";
        $result = mysqli_query($db, $query);


        if ($wylosowanaLiczba == 1){
            echo " <h3> Wylosowałeś: Titan (Holo)|Katowice 2014</h3>";

        }
        if ($wylosowanaLiczba == 2){
            echo " <h3> Wylosowałeś: Titan |Katowice 2014</h3>";
        }

        if ($wylosowanaLiczba == 3){
            echo " <h3> Wylosowałeś: Team Dignitas (Holo)|Katowice 2014</h3>";
        }

        if ($wylosowanaLiczba == 4){
            echo " <h3> Wylosowałeś: Team Dignitas|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 5){
            echo " <h3> Wylosowałeś: HellRaisers (Holo)|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 6){
            echo " <h3> Wylosowałeś: HellRaisers|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 7){
            echo " <h3> Wylosowałeś: Fnatic (Holo)|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 8){
            echo " <h3> Wylosowałeś: Fnatic|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 9){
            echo " <h3> Wylosowałeś: compLexity Gaming (Holo)|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 10){
            echo " <h3> Wylosowałeś: compLexity Gaming|Katowice 2014</h3>";
        }



        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sciezkaZdjecia = $row['zdjecie'];
            echo "<img src='$sciezkaZdjecia' alt='Zdjęcie z otwartej skrzyni'>";
        } else {
            echo "Nie udało się pobrać zdjęcia z bazy danych.";
        }
    
        $db->close();
    }
        ?>

<?php 
    // // if (isset($_POST['upload'])){
    // //     $target = "zdjecia/KatoChallengers".basename($_FILES['image']['name']);
         
    //     // $image = $_FILES['image']['name'];
    //     // $sql = "SELECT `ibuypowerHolo` FROM `skrzynia2`", ('$image');
    //     // mysqli_query($db, $sql);
    //     $wylosowanaLiczba = rand(1, 10);

    //     $query = "SELECT zdjecie FROM skrzynia1 WHERE id = $wylosowanaLiczba";
    //     $result = mysqli_query($db, $query);

    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();
    //         $sciezkaZdjecia = $row['zdjecie'];

            
    //         echo "<img src='$sciezkaZdjecia' alt='Zdjęcie z skrzyni'>";
    //     } else {
    //         echo "Nie udało się pobrać zdjęcia z bazy danych.";
    //     }

    //     $db->close();

    if (isset($_POST['otworz2'])) {
        otworzSkrzyne1();
    }
    
    function otworzSkrzyne1() {
       

    
    
        
        
        $wylosowanaLiczba = rand(1, 10);
        $db = mysqli_connect('localhost', 'root', '', 'cssoffer');
        $query = "SELECT zdjecie FROM skrzynia2 WHERE id = $wylosowanaLiczba";
        $result = mysqli_query($db, $query);


        if ($wylosowanaLiczba == 1){
            echo " <h3> Wylosowałeś: iBUYPOWER|Katowice 2014</h3>";

        }
        if ($wylosowanaLiczba == 2){
            echo " <h3> Wylosowałeś: iBUYPOWER (Holo)|Katowice 2014</h3>";
        }

        if ($wylosowanaLiczba == 3){
            echo " <h3> Wylosowałeś: mousesports|Katowice 2014</h3>";
        }

        if ($wylosowanaLiczba == 4){
            echo " <h3> Wylosowałeś: mousesports (Holo)|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 5){
            echo " <h3> Wylosowałeś: Natus Vincere|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 6){
            echo " <h3> Wylosowałeś: Natus Vincere (Holo)|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 7){
            echo " <h3> Wylosowałeś: Reason Gaming|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 8){
            echo " <h3> Wylosowałeś: Reason Gaming (Holo)|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 9){
            echo " <h3> Wylosowałeś: Virtus.Pro|Katowice 2014</h3>";
        }
        if ($wylosowanaLiczba == 10){
            echo " <h3> Wylosowałeś: Virtus.Pro (Holo)|Katowice 2014</h3>";
        }



        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sciezkaZdjecia = $row['zdjecie'];
            echo "<img src='$sciezkaZdjecia' alt='Zdjęcie z otwartej skrzyni'>";
        } else {
            echo "Nie udało się pobrać zdjęcia z bazy danych.";
        }
    
        $db->close();
    }
        ?>
    </div>


    <div id="prawologowanie">
        <h3><a href="logowanie.php">Zaloguj się</a></h3>
        <h3><a href="rejestracja.html">Zarejetruj się</a></h3>
    </div>
</body>
</html>