<?php
    session_start();
    $connect=mysqli_connect('localhost','root','','Piekarnia2');
    $nick=$_POST['name'];
    $haslo=$_POST['passwd'];
    $sql = "select Nick haslo FROM rejestracja where Nick = '$nick' and haslo = '$haslo'";  
        $result = mysqli_query($connect, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if(isset($nick) || isset($haslo))
        {
        if($count == 1){
            
            header("Refresh: 0.5; url=glowna.php", TRUE, 301); 
            echo '<script>alert("Logowanie udane")</script>';
            $_SESSION['nick']=$nick;
            $_SESSION['ile']=1;
            exit();
        }  
        else if($count==0){  
            header("Refresh: 0.5; url=login.html",TRUE, 301);
            echo '<script>alert("Logowanie nieudane")</script>';
            $_SESSION['ile']=0;
            exit();
        } 
    }
    mysqli_close($connect);
        
?>