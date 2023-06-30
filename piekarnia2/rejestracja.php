<?php
    $connect = mysqli_connect('localhost','root','','Piekarnia2');
    $imie=$_POST['imie'];
    $nazwi=$_POST['nazw'];
    $nickname=$_POST['nick'];
    $mail=$_POST['email'];
    $tel=$_POST['telefon'];
    $haslo=$_POST['passwd'];
    $ask = "INSERT INTO `rejestracja` (`ID`, `Imie`, `Nazwisko`, `Nick`, `email`, `Telefon`, `haslo`) VALUES (NULL, '$imie', '$nazwi', '$nickname', '$mail', '$tel', '$haslo')";
    if (isset($imie) || isset($nazwi) || isset($nickname) || isset($mail) || isset($tel) || isset($haslo))
	{ 
        header("Refresh: 0.5; url=login.html", TRUE, 301); 
		mysqli_query($connect, $ask);
		echo '<script>alert("Zarejestrowano poprawnie")</script>';
        exit();
	}
    else
    {
        header("Refresh: 0.5; url=rejestracja.html", TRUE, 301); 
        echo '<script>alert("Wpisz poprawnie dane")</script>';
        exit();
    }
    mysqli_close($connect);
?>