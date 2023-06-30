<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleTorba.css">
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
    </div>
    <table>
    <form method="post">
    <?php
        $connect = mysqli_connect('localhost','root','','Piekarnia2');
        $sql=mysqli_query($connect,"SELECT Nazwa, Cena, zdjecie FROM torba");
        $suma=0;
        $ile=1;
        while($wiersz=mysqli_fetch_assoc($sql))
        {
            $nazwa=$wiersz["Nazwa"];
            $cena=$wiersz["Cena"];
            $zdjecie=$wiersz["zdjecie"];
            
            echo '<tr><td><img id="test" src="img/'.$zdjecie.'"</img></td>';
            echo '<td>'.$nazwa.'</b></td>';
			echo '<td><input type="number" name="il" min="0" max="5"';
            if(isset($_POST['il'])){
                $ile=$_POST['il'];
                $cena=intval($cena*$ile);
              }
              echo 'placeholder="'.$ile.'" required/>'.'</td>';
              echo '<td><b>'.$cena.'.00zł</td>'.'</tr></b>';
            $suma=$suma+$cena;
            
        }
        echo "<tr><td></td><td></td><td><input type='submit' id='btnpolicz' value='Policz'/></form></td><td><b>SUMA: ".$suma.".00zł</b></td></tr>";
        echo "</table>";
        mysqli_close($connect);
        ?>
        <div id="wysylka" style="display: none;"> 
    <form method='POST'>
        <h2>W celu złożenia zamówienia prosimy o podanie niezbędnych danych</h2>
        <input type='test' name='imie' placeholder='Imię'/><br>
        <input type='text' name='nazwisko' placeholder='Nazwisko'/><br>
        <input type='text' name='adres' placeholder='Adres'/><br>
        <select name='swysylki'><option value='Paczkomat'>Paczkomat</option><option value='kurier'>Kurier</option></select> 
        <input type='submit' id="btnwysylka" name='wysylanie' value='Wyślij'></input>
    </form>
    <?php
    if(array_key_exists('wysylanie', $_POST)) {
        wysylanie();
    }
    function wysylanie()
    {
        if(isset($_POST['imie']) || isset($_POST['nazwisko']) || isset($_POST['adres']))
        {
        echo '<script>alert("Dziękujemy za zakupy w naszym sklepie,Smaczenego!';
        echo '\nKupione słodkości zostaną wysłane po wykonaniu płatności!")</script>';
        $connect=mysqli_connect('localhost','root','','Piekarnia2');
            $sql=mysqli_query($connect,"SELECT ID, Nazwa FROM torba");
            while($wiersz=mysqli_fetch_assoc($sql))
            {
                $nazwa=$wiersz["Nazwa"];
                $id=$wiersz["ID"];
                $zapytanie="DELETE FROM torba WHERE ID='$id'";
                if (mysqli_query($connect, $zapytanie)) 
                {
                    header("Refresh: 0.5; url=glowna.php");
                }
            }
            mysqli_close($connect);
        }
    }
        ?>
    </div>
    <button id="zamow" onclick="wysylaniee()">Zamów</button>
    <form method="POST" action="wyczysctorbe.php">
        <input  type="submit" id="btnczysc" value="Wyczyść"></input>
    </form>
    <main>
</main>
</body>
</html>
<script>
function wysylaniee()
{
    document.getElementById('wysylka').style.display = 'block'
}
</script>