<?php
    if(isset($_POST['lg']))
    {
        $i=0;
        $s=1;
        $mail=$_POST['email'];
        $pass=$_POST['pass'];
        $connection=mysqli_connect("localhost","root","123456789","signup");
        if (!$connection) 
        {
            ?>
            <html>
            <script>
                window.alert("DATABASE IS NOT FOUND");
            </script>
            </html>
            <?php
        }
        else
        {
            $query="SELECT * from detail where pass='$pass' and mail='$mail' ";
            $check=mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($check))
            {
                $i=$i+1;
                break;
            }
            if($i>0)
            {?>
                <html>
                <script>
                    window.alert("LOGIN SUCCESSFUL");
                    window.open('/main/index2.html','_self');
                </script>
                </html>
                <?php
            }
            else
            {
                ?>
                <html>
                <script>
                    window.alert("invalid Credintails");
                    window.open('login.html','_self');
                </script>
                </html>
                <?php
            }
            $connection->close();
        }
        
    }
?>
<html>
    <body bgcolor=#EEE2DC>
</html>