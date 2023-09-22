<?php
$connection=mysqli_connect("localhost:8080","root","123456789","signup");
if(isset($_POST['sig']))
{
        $password=$_POST['pass'];
        $email=$_POST['mail'];
    $mysql="INSERT INTO detail(pass,mail) VALUES ('$password','$email')";
    $result=mysqli_query($connection, $mysql);
    if($result)
    {
        ?>
            <html>
            <script>
                window.alert("SIGN UP Successful");
                window.open('LOGIN/login.html','_self');
            </script>
            </html>
        <?php
    }
    }
?>