<?php
    session_start();
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
        $db = new Database();
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        $result = mysqli_query($db->koneksi,"select * from admin where email='$email' and password='$pass'");
        $row = mysqli_num_rows($result);

        if ($row > 0){
            $_SESSION['login'] = $pass;

            echo "<script type='text/javascript'>
            alert('Login Berhasil!')
                window.location = 'index.php'
                </script>";
        }
        else{
         ?>
    <html>

         <head>
            <title>LOGIN</title>
         </head>
    <body>
            <center>
         <?php
          echo "Maaf Username & Password Anda Salah !!!";
            }
        }
            ?>
            </center>
        <form action="" method="POST">
            <table border=0 align="center" cellpadding=5 cellspacing=0>
                <tr>
                    <td colspan=3>
                        <center>
                            <font size=5>LOGIN</font>
                        </center>
                    </td>
                </tr>

                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" name="email"></td>
                        </tr>          
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan=2></td>
                            <td><input type="submit" name="simpan" value="LOGIN"></td>
                        </tr>
            </table>
        </form>
    </body>
    </html>
