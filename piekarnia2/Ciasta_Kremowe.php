<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleProdukty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Ciasta_Kremowe</title>
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
        <h1> Ciasta Kremowe</h1>
    <div class="towar">
    <img src="img/Kremowy BISZKOPT Z TRUSKAWKAMI.jpg"></img>
        <li>BISZKOPT Z TRUSKAWKAMI</li>
            <ul class="ul2">
            <li><b>cena:</b> 20.10zł</li>
            <li><b>smak:</b> Słodki</li>
        </ul>
        <form method="post">
            <input type="submit" name="Ciasta_Kremowe1" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/Kremowy DESER TIRAMISU.jpg"></img>
        <li>Kremowy DESER TIRAMISU</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 23.0zł</li>
            <li><b>smak:</b> Wytrawny</li>
        </ul>
        <form method="post">
            <input type="submit" name="Ciasta_Kremowe2" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/Kremowy BANANOWY SONG.jpg"></img>
        <li>Kremowy BANANOWY SONG</li>
            <ul class="ul2">
            <li><b>cena:</b> 25.0zł</li>
            <li><b>smak:</b> Słodki</li>
        </ul>
        <form method="post">
            <input type="submit" name="Ciasta_Kremowe3" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/Kremowy PIJANA WIŚNIA.jpg"></img>
        <li>Kremowy PIJANA WIŚNIA</li>
            <ul class="ul2">
            <li><b>cena:</b> 21.0</li>
            <li><b>smak:</b> Kwaśny</li>
        </ul>
        <form method="post">
            <input type="submit" name="Ciasta_Kremowe4" value="Dodaj do torby" class="btn" />
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
     if(array_key_exists('Ciasta_Kremowe4', $_POST)) {
        Ciasta_Kremowe4();
    }
    function Ciasta_Kremowe4()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Kremowy PIJANA WIŚNIA';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Kremowy PIJANA WIŚNIA',21.00,1,'Kremowy PIJANA WIŚNIA.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('Ciasta_Kremowe3', $_POST)) {
        Ciasta_Kremowe3();
    }
    function Ciasta_Kremowe3()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Kremowy BANANOWY SONG';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Kremowy BANANOWY SONG',23.00,1,'Kremowy BANANOWY SONG.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('Ciasta_Kremowe2', $_POST)) {
        Ciasta_Kremowe2();
    }
    function Ciasta_Kremowe2()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Kremowy DESER TIRAMISU';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Kremowy DESER TIRAMISU',23.00,1,'Kremowy DESER TIRAMISU.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('Ciasta_Kremowe1', $_POST)) {
        Ciasta_Kremowe1();
    }
    function Ciasta_Kremowe1()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Kremowy BISZKOPT Z TRUSKAWKAMI';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Kremowy BISZKOPT Z TRUSKAWKAMI',20.10,1,'Kremowy BISZKOPT Z TRUSKAWKAMI.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>