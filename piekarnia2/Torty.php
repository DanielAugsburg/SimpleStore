<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleProdukty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Torty</title>
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
        <h1> Torty</h1>
    <div class="towar">
    <img src="img/tort-oreo.jpg"></img>
        <li>Tort Oreo</li>
            <ul class="ul2">
            <li><b>cena:</b> 199.00zł</li>
            <li><b>smak:</b> Słodki</li>
        </ul>
        <form method="post">
            <input type="submit" name="tort1" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/Czarny Las.jpg"></img>
        <li>Czarny Las</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 149.30zł</li>
            <li><b>smak:</b> Wytrawny</li>
        </ul>
        <form method="post">
            <input type="submit" name="tort2" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/tortzezlotem.jpg"></img>
        <li>Tort ze złotem</li>
            <ul class="ul2">
            <li><b>cena:</b> 450.10zł</li>
            <li><b>smak:</b> Pół Słodki</li>
        </ul>
        <form method="post">
            <input type="submit" name="tort3" value="Dodaj do torby" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/Tort czekoladowy z czarną porzeczką.jpg"></img>
        <li>Czekoladowy z czarną porzeczką</li>
            <ul class="ul2">
            <li><b>cena:</b> 110.0</li>
            <li><b>smak:</b> Wytrawny</li>
        </ul>
        <form method="post">
            <input type="submit" name="tort4" value="Dodaj do torby" class="btn" />
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
     if(array_key_exists('tort4', $_POST)) {
        tort4();
    }
    function tort4()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Tort czekoladowy z czarną porzeczką';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Tort czekoladowy z czarną porzeczką',110.00,1,'Tort czekoladowy z czarną porzeczką.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('tort3', $_POST)) {
        tort3();
    }
    function tort3()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Tort ze złotem';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Tort ze złotem',450.10,1,'tortzezlotem.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('tort2', $_POST)) {
        tort2();
    }
    function tort2()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Czarny Las';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Czarny Las',149.30,1,'Czarny Las.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('tort1', $_POST)) {
        tort1();
    }
    function tort1()
    {
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $nazwa='Tort Oreo';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM torba WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz jest w torbie")</script>';
        }
        else
        {
            $ask="INSERT INTO `torba` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'Tort Oreo',199.00,1,'tort-oreo.jpg')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do torby")</script>';
        }
        mysqli_close($connect);
    }
    ?>