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
    <button type="submit" name="otworz3" id="otworz">Bravo Case</button>
    <button type="submit" name="otworz4" id="otworz">Otwórz Skrzynię 4</button>
    <button type="submit" name="otworz5" id="otworz">Otwórz Skrzynię 5</button>
    <button type="submit" name="otworz6" id="otworz">Knifes Case</button>
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
        otworzSkrzyne1();
    }
    
    function otworzSkrzyne1() 
    {
            $wylosowanaLiczba = rand(1, 10);
            $db = mysqli_connect('localhost', 'root', '', 'cssoffer');
            $query = "SELECT zdjecie FROM skrzynia1 WHERE id = $wylosowanaLiczba";
            $result = mysqli_query($db, $query);

            $LiczbaNapis1 = [
                1 => "Titan (Holo)|Katowice 2014",
                2 => "Titan |Katowice 2014",
                3 => "Team Dignitas (Holo)|Katowice 2014",
                4 => "Team Dignitas|Katowice 2014",
                5 => "HellRaisers (Holo)|Katowice 2014",
                6 => "HellRaisers|Katowice 2014",
                7 => "Fnatic (Holo)|Katowice 2014",
                8 => "Fnatic|Katowice 2014",
                9 => "compLexity Gaming (Holo)|Katowice 2014",
                10 => "compLexity Gaming|Katowice 2014",
            ];
            
            if (isset($LiczbaNapis1[$wylosowanaLiczba])) {
                echo "<h3> Wylosowałeś: {$LiczbaNapis1[$wylosowanaLiczba]}</h3>";
            }
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $sciezkaZdjecia = $row['zdjecie'];
                echo "<img src='$sciezkaZdjecia' alt='Twój przedmiot'>";
            } else {
                echo "Nie udało się pobrać zdjęcia z bazy danych.";
            }

            $db->close();
        }
    ?>

    <?php 

        if (isset($_POST['otworz2'])) {
            otworzSkrzyne2();
        }
        
        function otworzSkrzyne2() 
        {
        
            $wylosowanaLiczba = rand(1, 10);
            $db = mysqli_connect('localhost', 'root', '', 'cssoffer');
            $query = "SELECT zdjecie FROM skrzynia2 WHERE id = $wylosowanaLiczba";
            $result = mysqli_query($db, $query);

            $LiczbaNapis2 = [
                1 => "iBUYPOWER|Katowice 2014",
                2 => "iBUYPOWER (Holo)|Katowice 2014",
                3 => "mousesports|Katowice 2014",
                4 => "mousesports (Holo)|Katowice 2014",
                5 => "Natus Vincere|Katowice 2014",
                6 => "Natus Vincere (Holo)|Katowice 2014",
                7 => "Reason Gaming|Katowice 2014",
                8 => "Reason Gaming (Holo)|Katowice 2014",
                9 => "Virtus.Pro|Katowice 2014",
                10 => "Virtus.Pro (Holo)|Katowice 2014",
            ];
            
            if (isset($LiczbaNapis2[$wylosowanaLiczba])) {
                echo "<h3> Wylosowałeś: {$LiczbaNapis2[$wylosowanaLiczba]}</h3>";
            }
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $sciezkaZdjecia = $row['zdjecie'];
                echo "<img src='$sciezkaZdjecia' alt='Twój przedmiot    '>";
            } else {
                echo "Nie udało się pobrać zdjęcia z bazy danych.";
            }
        
            $db->close();
        }
    ?>


    <?php 

            if (isset($_POST['otworz3'])) {
            otworzSkrzyne3();
        }
        
        function otworzSkrzyne3() 
        {
            $wylosowanaLiczba = rand(1, 10);
            $db = mysqli_connect('localhost', 'root', '', 'cssoffer');
            $query = "SELECT zdjecie FROM skrzynia3 WHERE id = $wylosowanaLiczba";
            $result = mysqli_query($db, $query);

            $LiczbaNapis3 = [
                1 => "AWP | Graphite",
                2 => "AK-47 | Fire Serpent",
                3 => "Galil AR | Shattered",
                4 => "Desert Eagle | Golden Koi",
                5 => "M4A1-S | Bright Water",
                6 => "M4A4 | Zirka",
                7 => "MAC-10 | Graven",
                8 => "P90 | Emerald Dragon4",
                9 => "P2000 | Ocean Foam",
                10 => "USP-S | Overgrowth",
            ];

            if (isset($LiczbaNapis3[$wylosowanaLiczba])) {
                echo "<h3> Wylosowałeś: {$LiczbaNapis3[$wylosowanaLiczba]}</h3>";
            }
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $sciezkaZdjecia = $row['zdjecie'];
                echo "<img src='$sciezkaZdjecia' alt='Twój przedmiot    '>";
            } else {
                echo "Nie udało się pobrać zdjęcia z bazy danych.";
            }
        
            $db->close();
        }
    ?>


    <?php 
        if (isset($_POST['otworz4'])) {
            otworzSkrzyne4();
        }

        function otworzSkrzyne4() 
        {
            $wylosowanaLiczba = rand(1, 10);
            $db = mysqli_connect('localhost', 'root', '', 'cssoffer');
            $query = "SELECT zdjecie FROM skrzynia4 WHERE id = $wylosowanaLiczba";
            $result = mysqli_query($db, $query);

            $LiczbaNapis4 = [
                1 => "Karambit| Case Hardened",
                2 => "Karambit| Crimson Web",
                3 => "Karambit| Doppler",
                4 => "Karambit| Fade",
                5 => "Karambit| Marble Fade",
                6 => "Karambit| Night",
                7 => "Karambit| Safari Mesh",
                8 => "Karambit| Tiger Tooth",
                9 => "Karambit| Ultraviolet",
                10 => "Karambit|★ (Vanilla)",
            ];

            if (isset($LiczbaNapis4[$wylosowanaLiczba])) {
                echo "<h3> Wylosowałeś: {$LiczbaNapis4[$wylosowanaLiczba]}</h3>";
            }
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $sciezkaZdjecia = $row['zdjecie'];
                echo "<img src='$sciezkaZdjecia' alt='Twój przedmiot    '>";
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