<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tamst0re.id</title>
    <style type="text/css">
   
         body{
            background-image: url('https://cutewallpaper.org/21/4d-wallpaper-hd/4D-Ultra-HD-Wallpapers-Top-Free-4D-Ultra-HD-Backgrounds-.jpg');
            background-color: black;
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;  
        }
        
        h1{
            font-size: 50px ;
            font-family: calibri;
            text-align: center;
            color:#129656;
            padding-bottom: 15px;
            padding-right: 33px;
            margin-top: -20px;
            border-bottom: 2px solid white;
        }
        form{
            text-align: left;
            margin-top: 100px;
            margin-bottom: 100px;
            padding-left: 50px;
            padding-top: 80px;
            color: #129656;
            font-size: 20px;
            font-family: calibri;
            background-color: white;
            margin-left: 500px;
            margin-right: 500px;
            border-radius: 15px;
        }
        
        input[type="text"]{
            border: none;
            border-bottom: 1px solid #129656;
            margin: 0px 0px;
            width: 400px;
            margin-bottom: 20px;
            height: 32px;
            font-size: 15px;
            outline: none;
            background-color: none;
}
        input[type="password"]{
            border: none;
            border-bottom: 1px solid #129656;
            margin: 0px 0px;
            width: 400px;
            margin-bottom: 20px;
            height: 32px;
            font-size: 15px;
            outline: none;
            background-color: none;
}
        .ini{
            text-decoration: none;
            border: 1px solid #129656;
            padding: 10px;
            border-radius: 10px;
            color: white;
            background-color: #129656;
            font-size: 15px;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 1px;
            margin-right: 20px;
        }
        .ini:hover{
        color: darkgrey;
        }
        .footer-list{
            float: right;


        }
        .footer-list li {
            list-style-type: none;
            padding-top: 50px;
            padding-bottom: 50px;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-left: 1px;
            margin-right: 40px;
        }
        a{
            color: #129656;
            text-decoration: none;
            font-size: 20px;
        }
        a:hover{
            color: darkgrey;
        }

        p{
            color:  #129656;
            margin-top: 70px;
            margin-left: -125px;
            float: left;
        }


    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Log in</h1>
        Username<br><input type="text" name="nama" required="username" placeholder="Masukan username Anda"><br><br>

        Password<br><input type="password" name="pass" placeholder="Masukan password Anda" required/><br><br>
        
        <input class="ini" type = "submit" value="Login" name="login">
        <div class="footer-list">
        <p>Belum punya akun?</p>
        <ul>
            <li><a href="index.php"><u>Daftar</u></a></li>
        </ul>
    </div>
        <input class="ini" type="reset" value= "Clear answer"><br><br><br><br>

</form>
<?php 
    if(isset($_POST['login'])){
        include 'koneksi.php';
        $cek = mysqli_query($conn, "SELECT * FROM tb_satu WHERE nama = '".$_POST['nama']."' AND
            password = '".$_POST['pass']."'");
        $row = mysqli_fetch_array($cek);
        $count = mysqli_num_rows($cek);

        if($count>0){
            session_start();
            $_SESSION['nama']=$row['nama'];
            $_SESSION['telepon']=$row['telepon'];            
            $_SESSION['email']=$row['email'];

            header('location:beranda.php');
        }else{
            die('<script>alert("Username atau Email anda salah!")</script>');
        }
    }
?>
</body>
</html>