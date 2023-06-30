<?php
            $connect=mysqli_connect('localhost','root','','Piekarnia2');
            $sql=mysqli_query($connect,"SELECT ID, Nazwa FROM torba");
            while($wiersz=mysqli_fetch_assoc($sql))
            {
                $nazwa=$wiersz["Nazwa"];
                $id=$wiersz["ID"];
                $zapytanie="DELETE FROM torba  WHERE ID='$id'";
                if (mysqli_query($connect, $zapytanie)) 
                {
                    header("Refresh: 0.1; url=torba.php");
                }
            }
            mysqli_close($connect);
        ?>