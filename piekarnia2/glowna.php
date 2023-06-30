<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mobile.css" media="(min-width: 768px)">
    <link rel="stylesheet" type="text/css" href="tablet.css" media="(min-width: 1024px)">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Piekarnia Ciastko</title>
</head>
<body>
    
<div class="container">
    <header>
    <div id="Rejestracja">
        <?php
        session_start();
        if($_SESSION['ile']==NULL)
        {
        $_SESSION['ile']=0;
        $_SESSION['nick']='nic';
        echo "<a href='login.html'><ion-icon class='Rejestracja' name='log-in-outline' size='large'></ion-icon></a>";
        echo "<a href='rejestracja.html'><ion-icon class='Rejestracja' name='add-circle-outline' size='large'></ion-icon></a>";
        }
        else
        {
        $czy=$_SESSION['ile'];
        $nic=$_SESSION['nick'];
        if($czy==1)
        {
            echo '<a href="logout.php"><ion-icon class="Rejestracja" name="log-out-outline" size="large"></ion-icon></a>';
            echo '<ion-chip class="chip"><ion-icon id="icon" name="people-outline"></ion-icon><ion-label id="lable">'.$nic.'</ion-label><ion-icon name="close"></ion-icon></ion-chip>';
        }
        else
        
        if($czy==0)
        {               
            echo "<button class='Rejestracja'><a href='login.html'>Login</a></button>";
            echo "<button class='Rejestracja'><a href='rejestracja.html'>Register</a></button>";
        }
    }
        ?>
        <ion-icon class="torbabtn" name="bag-handle-outline" size="large" onclick="location.href='torba.php'"></ion-icon>
    </div>    
        <h2>Piekarnia Ciastko</h2>
    </header>
    <div class="przyciski">
		<button class="button" onclick="location.href='onas.html';">O nas</button>
		<button class="button" onclick="location.href='glowna.php';">Strona Głowna</button>
        <div class="rozwijane">
		    <button class="button">Produkty</button>
            <div class="lista">
                <button class="button" onclick="location.href='Torty.php';">Torty</b></button>
                <button class="button" onclick="location.href='Ciasta_Kremowe.php';">Ciastka Kremowe</button>
                <button class="button" onclick="location.href='Sernik.php';">Sernik</button>
            </div>
    </div>
		
    </div>
       <main>
    <div id="Powitanie">       
        <h3>Najlepsze wypieki w mieście!</h3>
        Dlaczego? Nasza piekarnia korzysta ze sprawdzonych przepisów już 30 lat. <br>
        Mamy najlepszych piekarzy w stolicy i cały czas rozwijamy nasze zaplecza oraz słodkości.<br>
        Jeżeli chcesz zamówić nasze wypieki, zapraszamy do zakładki "Produkty"<br>
        Na dziś proponujemy:
        <div class="punkty">
        <ul>
          <li>Kremowy BISZKOPT Z TRUSKAWKAMI</li>
          <li>Tort Czarny Las</li>  
        </ul>
        </div>    
    </div>
    <div id="Koment">
        
        <?php
            
           // $Zmienna = $_SESSION["Zmienna"];
            //$Nickname = $_SESSION["Nickname"];
            //if ($Zmienna == 1) {
                
                echo "<h3 id='head'>Opisz swoje wrażenia, aby nasze produkty były coraz lepsze</h3>";
                echo "<form method='POST' action='dodajKom.php' id = 'Kom'>";
                echo "<p>Nick : </p> <input type='text' required='required' name='nik'>";
                echo "<p>Komentarz : </p><textarea required='required'  name='kom'></textarea><br>";
                echo "<input type='submit' class='Przyciski2' value='Dodaj'>";
                echo "</form>";
            //} 
    ?>
        </div>
     </main>
     <footer>
     Autorzy strony: Daniel Augsburg, Dawid Jabłoński, Gerard Warok  
</footer>
</div>    
</body>
</html>