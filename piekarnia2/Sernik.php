<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleProdukty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Sernik</title>
</head>
<body>
<ion-icon class="torbabtn" name="bag-handle-outline" size="large" onclick="location.href='torba.php'"></ion-icon>
    
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
    <main>
    <ul id="ul1">
        <h1> Serniki</h1>
    <div class="towar">
    <img src="img/Sernik IZAURA.jpg"></img>
        <li>Sernik IZAURA</li>
            <ul class="ul2">
            <li><b>cena:</b> 18.00zł</li>
            <li><b>smak:</b> Pół Słodki</li>
        </ul>
        <form method="post">
            <input type="submit" name="Sernik1" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/Sernik DUET.jpg"></img>
        <li>Sernik DUET</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 22.00zł</li>
            <li><b>smak:</b> Wytrawny</li>
        </ul>
        <form method="post">
            <input type="submit" name="Sernik2" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/SERNIK Z WIŚNIAMI.jpg"></img>
        <li>SERNIK Z WIŚNIAMI</li>
            <ul class="ul2">
            <li><b>cena:</b> 26.00zł</li>
            <li><b>smak:</b> Kwaśny</li>
        </ul>
        <form method="post">
            <input type="submit" name="Sernik3" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/SERNIK TOFFICZEKOLADA.jpg"></img>
        <li>SERNIK TOFFI/CZEKOLADA</li>
            <ul class="ul2">
            <li><b>cena:</b> 25.00zł</li>
            <li><b>smak:</b> Wytrawny</li>
        </ul>
        <form method="post">
            <input type="submit" name="Sernik4" value="Dodaj do torby" class="btn" />
        </form>
        </div>
    </ul> 
    </main>
    <footer>
    Autorzy strony: Daniel Augsburg, Dawid Jabłoński, Gerard Warok
    </footer>
</body>
</html>
<?php
     if(array_key_exists('Sernik4', $_POST)) {
        Sernik4();
    }
    function Sernik4()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='SERNIK TOFFI/CZEKOLADA';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'SERNIK TOFFI/CZEKOLADA',25.00,1,'SERNIK TOFFICZEKOLADA.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('Sernik3', $_POST)) {
        Sernik3();
    }
    function Sernik3()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='SERNIK Z WIŚNIAMI';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'SERNIK Z WIŚNIAMI',26.00,1,'SERNIK Z WIŚNIAMI.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('Sernik2', $_POST)) {
        Sernik2();
    }
    function Sernik2()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Sernik DUET';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Sernik DUET',22.00,1,'Sernik DUET.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('Sernik1', $_POST)) {
        Sernik1();
    }
    function Sernik1()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Sernik IZAURA';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Sernik IZAURA',18.00,1,'Sernik IZAURA.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>