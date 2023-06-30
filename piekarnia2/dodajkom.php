<?php
    $connect = mysqli_connect('localhost','root','','Piekarnia2');
    $nik=$_POST['nik'];
    $kom=$_POST['kom'];
    $ask = "INSERT INTO komentarze (ID, Nick, Komentarz) VALUES (NULL, '$nik', '$kom')";
    if (isset($nik) || isset($kom))
    { 
        header("Refresh: 0.5; url=glowna.php", TRUE, 301); 
        mysqli_query($connect, $ask);
        echo '<script>alert("Komentarz Poprawnie Dodany :) ")</script>';
        exit();
    }
    else
    {
        header("Refresh: 0.5; url=komentarze.php", TRUE, 301); 
        echo '<script>alert("Błąd :( ")</script>';
        exit();
    }
    mysqli_close($connect);
?>